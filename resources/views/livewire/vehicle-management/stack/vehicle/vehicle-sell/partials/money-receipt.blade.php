 <!DOCTYPE html>
 <html lang="en">

     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <title>Document</title>
         <!-- Include latest jsPDF and html2canvas libraries -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
         <style>
             @media print {
                 @page {
                     margin: 20mm;
                 }
             }
         </style>
     </head>

     <body>
         <!-- Money Receipt Part Start !-->
         <div id="divId" class="col-lg-12 mt-7">
             <table class="border-collapse border border-slate-500 w-100">
                 <tr>
                     <td class="border border-slate-600 px-2">Name</td>
                     <td class="border border-slate-600 px-2">{{ $client_name }}</td>
                 </tr>
                 <tr>
                     <td class="border border-slate-600 px-2">NID NO</td>
                     <td class="border border-slate-600 px-2">{{ $nid }}</td>
                 </tr>
                 <tr>
                     <td class="border border-slate-600 px-2">MOBILE</td>
                     <td class="border border-slate-600 px-2">{{ $mobile }}</td>
                 </tr>
                 <tr>
                     <td class="border border-slate-600 px-2">ADDRESS</td>
                     <td class="border border-slate-600 px-2">{{ $address }}</td>
                 </tr>
             </table>

             <table class="border-collapse border border-slate-500 w-100 mt-7">
                 <tr>
                     <td class="border border-slate-600 px-2">CAR NAME</td>
                     <td class="border border-slate-600 px-2">{{ $vehicle?->name . ' ' . $vehicle?->models?->name }}</td>
                 </tr>
                 <tr>
                     <td class="border border-slate-600 px-2">REGISTRATION NO</td>
                     <td class="border border-slate-600 px-2">{{ $vehicle?->registration_number }}</td>
                 </tr>
                 <tr>
                     <td class="border border-slate-600 px-2">MODEL YEAR</td>
                     <td class="border border-slate-600 px-2">{{ $vehicle?->model_year->name }}</td>
                 </tr>
                 <tr>
                     <td class="border border-slate-600 px-2">CHASSIS NO</td>
                     <td class="border border-slate-600 px-2">{{ $vehicle?->chassis_number }}</td>
                 </tr>
                 <tr>
                     <td class="border border-slate-600 px-2">ENGINE NO</td>
                     <td class="border border-slate-600 px-2">{{ $vehicle?->engine_number }}</td>
                 </tr>
             </table>

             <table class="border-collapse border border-slate-500 w-100 mt-7">
                 <tr>
                     <td class="border border-slate-600 px-2">Car Price</td>
                     <td class="border border-slate-600 px-2">{{ number_format((float) $sell_price, 0) }} /=</td>
                 </tr>
                 @foreach ($vehicle->buyPayments as $each)
                     <tr>
                         <td class="border border-slate-600 px-2">{{ $each?->paymentMethod->name }}</td>
                         <td class="border border-slate-600 px-2">{{ number_format($each?->amount, 0) }} /=</td>
                     </tr>
                 @endforeach
                 <tr>
                     <td class="border border-slate-600 px-2 font-bold">Total Paid</td>
                     <td class="border border-slate-600 px-2 font-bold">{{ number_format($vehicle->buyPayments->sum('amount'), 0) }} /=</td>
                 </tr>

                 <tr>
                     <td class="border border-slate-600 px-2 font-bold">Customer Due</td>
                     <td class="border border-slate-600 px-2 font-bold">{{ number_format((int) $sell_price - $vehicle->buyPayments->sum('amount'), 0) }} /=</td>
                 </tr>

             </table>
         </div>
         <!-- Money Receipt Part End !-->

         <button onclick="saveDiv('divId', 'Receipt')">Save as PDF</button>
         <button onclick="printDiv('divId', 'Receipt')">Print</button>

         <script>
             const {
                 jsPDF
             } = window.jspdf;

             async function saveDiv(divId, title) {
                 try {
                     const canvas = await html2canvas(document.getElementById(divId), {
                         useCORS: true
                     });
                     const imgData = canvas.toDataURL('image/png');
                     const pdf = new jsPDF('p', 'mm', 'a4'); // 'p' for portrait, 'mm' for millimeters, 'a4' for A4 size

                     const imgWidth = 210; // A4 width in mm
                     const imgHeight = canvas.height * imgWidth / canvas.width;
                     const pageHeight = 295; // A4 height in mm
                     let heightLeft = imgHeight;
                     let position = 0;

                     pdf.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
                     heightLeft -= pageHeight;

                     while (heightLeft >= 0) {
                         position = heightLeft - imgHeight;
                         pdf.addPage();
                         pdf.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
                         heightLeft -= pageHeight;
                     }

                     pdf.save(`${title}.pdf`);
                 } catch (error) {
                     console.error('Error generating PDF:', error);
                 }
             }

             async function printDiv(divId, title) {
                 try {
                     const canvas = await html2canvas(document.getElementById(divId), {
                         useCORS: true
                     });
                     const imgData = canvas.toDataURL('image/png');
                     const mywindow = window.open('', 'PRINT', 'height=650,width=700,top=100,left=150');

                     mywindow.document.write(`<html><head><title>${title}</title>`);
                     mywindow.document.write('</head><body >');
                     mywindow.document.write(`<img src="${imgData}" style="width: 100%;" />`);
                     mywindow.document.write('</body></html>');

                     mywindow.document.close(); // necessary for IE >= 10
                     mywindow.focus(); // necessary for IE >= 10

                     mywindow.print();
                     mywindow.close();

                     return true;
                 } catch (error) {
                     console.error('Error printing content:', error);
                 }
             }
         </script>
     </body>

 </html>
