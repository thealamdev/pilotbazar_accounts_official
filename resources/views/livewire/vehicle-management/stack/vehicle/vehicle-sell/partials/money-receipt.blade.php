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
         <div id="printMoneyReceipt" class="col-lg-12 mt-3 px-7" style="margin-top:-380px !important;z-index:-1000 !important">
             <div class="mainPdfContnt mt-56">
                 <div class="d-flex justify-content-center mb-5">
                     <h3 style="text-decoration: underline">Money Receipt</h3>
                 </div>
                 <div class="d-flex justify-content-end mb-3">
                     <p class="border border-black px-3 py-1">Date : {{ $sell_date ? $sell_date : $vehicle?->seller?->sell_date }}</p>
                 </div>
                 <table class="border-collapse border border-black w-100">
                     <tr>
                         <td class="border border-black px-3 py-1 text-black w-25 fs-5 font-bold">Name</td>
                         <td class="border border-blac px-3 py-1 text-black w-25 fs-5 font-bold">{{ $client_name ? $client_name : $vehicle->seller?->name }}</td>
                         <td class="border border-slate-600 px-3 py-1 text-black w-25 fs-5 font-bold">NID NO</td>
                         <td class="border border-slate-600 px-3 py-1 text-black w-25 fs-5 font-bold">{{ $nid ? $nid : $vehicle?->seller?->nid }}</td>
                     </tr>

                     <tr>
                         <td class="border border-slate-600 px-3 py-1 text-black w-25 fs-5 font-bold">MOBILE</td>
                         <td class="border border-slate-600 px-3 py-1 text-black w-25 fs-5 font-bold">{{ $mobile ? $mobile : $vehicle->seller?->mobile }}</td>
                         <td class="border border-slate-600 px-3 py-1 text-black w-25 fs-5 font-bold">ADDRESS</td>
                         <td class="border border-slate-600 px-3 py-1 text-black w-25 fs-5 font-bold">{{ $address ? $address : $vehicle?->seller?->address }}</td>
                     </tr>
                 </table>

                 <table class="border-collapse border border-slate-500 w-100 mt-7">
                     <tr>
                         <td class="border border-slate-600 px-3 py-1 text-black w-50 fs-5 font-bold">CAR NAME</td>
                         <td class="border border-slate-600 px-3 py-1 text-black w-50 fs-5 font-bold">{{ $vehicle?->name . ' ' . $vehicle?->models?->name }}</td>
                     </tr>
                     <tr>
                         <td class="border border-slate-600 px-3 py-1 text-black w-50 fs-5 font-bold">REGISTRATION NO</td>
                         <td class="border border-slate-600 px-3 py-1 text-black w-50 fs-5 font-bold">{{ $vehicle?->registration_number }}</td>
                     </tr>
                     <tr>
                         <td class="border border-slate-600 px-3 py-1 text-black w-50 fs-5 font-bold">MODEL YEAR</td>
                         <td class="border border-slate-600 px-3 py-1 text-black w-50 fs-5 font-bold">{{ $vehicle?->model_year->name }}</td>
                     </tr>
                     <tr>
                         <td class="border border-slate-600 px-3 py-1 text-black w-50 fs-5 font-bold">CHASSIS NO</td>
                         <td class="border border-slate-600 px-3 py-1 text-black w-50 fs-5 font-bold">{{ $vehicle?->chassis_number }}</td>
                     </tr>
                     <tr>
                         <td class="border border-slate-600 px-3 py-1 text-black w-50 fs-5 font-bold">ENGINE NO</td>
                         <td class="border border-slate-600 px-3 py-1 text-black w-50 fs-5 font-bold">{{ $vehicle?->engine_number }}</td>
                     </tr>
                 </table>

                 <!-- Sell Service Table Start -->
                 <table class="border-collapse border border-slate-500 w-100 mt-7">
                     @foreach ($sell_services as $each)
                         <tr>
                             <td class="border border-slate-600 px-3 py-1 text-black w-50 fs-5 font-bold">{{ $each?->sell_service?->name }}</td>
                             <td class="border border-slate-600 px-3 py-1 text-black w-25 fs-5 font-bold"> {{ $each?->amount }} /=</td>
                             <td class="border border-slate-600 px-3 py-1 text-black w-25 fs-5 font-bold"> {{ Helper::ISODate($each?->created_at) }}</td>
                         </tr>
                     @endforeach

                 </table>
                 <!-- Sell Service Table End -->

                 <table class="border-collapse border border-slate-500 w-100 mt-7">
                     <tr>
                         <td class="border border-slate-600 px-3 py-1 text-black w-50 fs-5 font-bold">Car Price(Main Price + Sell Services)</td>
                         <td class="border border-slate-600 px-3 py-1 text-black w-25 fs-5 font-bold">{{ number_format($sell_services->sum('amount') + (float) $sell_price, 0) }} /=</td>
                         <td class="border border-slate-600 px-3 py-1 text-black w-25 fs-5 font-bold">{{ Helper::ISODate($vehicle->created_at) }} (Sell Date)</td>
                     </tr>
                     @foreach ($vehicle->buyPayments as $each)
                         <tr>
                             <td class="border border-slate-600 px-3 py-1 text-black w-50 fs-5 font-bold">{{ $each?->paymentMethod->name }}(Sell Date)</td>
                             <td class="border border-slate-600 px-3 py-1 text-black w-25 fs-5 font-bold">{{ number_format($each?->amount, 0) }} /=</td>
                             <td class="border border-slate-600 px-3 py-1 text-black w-25 fs-5 font-bold">{{ Helper::ISODate($each->creatd_at) }}</td>
                         </tr>
                     @endforeach
                     <tr>
                         <td class="border border-slate-600 px-3 py-1 text-black w-50 fs-5 font-bold">Total Paid</td>
                         <td colspan="2" class="border border-slate-600 px-3 py-1 text-black w-50 fs-5 font-bold">{{ number_format($vehicle->buyPayments->sum('amount'), 0) }} /=</td>
                     </tr>

                     <tr>
                         <td class="border border-slate-600 px-3 py-1 text-black w-50 fs-5 font-bold">Customer Due</td>
                         <td colspan="2" class="border border-slate-600 px-3 py-1 text-black w-50 fs-5 font-bold text-danger">
                             {{ number_format($sell_services->sum('amount') + $sell_price - $vehicle->buyPayments->sum('amount'), 0) }} /=
                         </td>
                     </tr>
                 </table>

                 <div class="comment pt-3">
                     <h4 class="font-bold">
                         *Depends on BRTA requirement. Charge may increase.
                     </h4>
                     <p class="fs-5 font-bold">Total amount Paid in a word Today : {{ Helper::numberToWords((int) $sell_price) }} only</p>
                     <p class="fs-5 font-bold">Total amount Paid in a word Till Now : {{ Helper::numberToWords((int) $sell_price) }} only</p>
                 </div>

                 <div class="signature pt-14 d-flex justify-content-between">
                     <h4 class="font-bold">
                         Received Signature
                     </h4>
                     <h4 class="font-bold">
                         Paid Signature
                     </h4>
                 </div>
             </div>
         </div>
         <!-- Money Receipt Part End !-->

         <script>
             const {
                 jsPDF
             } = window.jspdf;

             async function saveDiv(printMoneyReceipt, title) {
                 try {
                     const canvas = await html2canvas(document.getElementById(printMoneyReceipt), {
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

             async function printDiv(printMoneyReceipt, title) {
                 try {
                     // Ensure the element exists
                     const element = document.getElementById(printMoneyReceipt);
                     if (!element) {
                         throw new Error(`Element with ID ${printMoneyReceipt} not found.`);
                     }

                     // Capture the content as a canvas image
                     const canvas = await html2canvas(element, {
                         useCORS: true
                     });
                     const imgData = canvas.toDataURL('image/png');

                     // Open a new window for printing
                     const mywindow = window.open('', 'PRINT', 'height=650,width=700,top=100,left=150');
                     if (!mywindow) {
                         throw new Error('Failed to open print window.');
                     }

                     // Write the HTML content
                     mywindow.document.open();
                     mywindow.document.write(`
            <html>
                <head>
                    <title>${title}</title>
                </head>
                <body>
                    <img src="${imgData}" style="width: 100%;" />
                </body>
            </html>
        `);
                     mywindow.document.close();

                     // Ensure the document is fully loaded before printing
                     mywindow.onload = () => {
                         mywindow.focus();
                         mywindow.print();
                         mywindow.close();
                     };

                     return true;
                 } catch (error) {
                     console.error('Error printing content:', error);
                     return false;
                 }
             }
         </script>
     </body>

 </html>
