const generatePDF = async (name) => {
    const { degrees, PDFDocument, rgb, StandardFonts } = PDFLib

    const url = '/pdf/MembresiasRedmis.pdf'
    const existingPdfBytes = await fetch(url)
        .then((res) => {
            return res.arrayBuffer();
        });

    const pdfDoc = await PDFDocument.load(existingPdfBytes);

    const helveticaFont = await pdfDoc.embedFont(StandardFonts.Helvetica)



    const pages = pdfDoc.getPages();
    const firstPage = pages[0];


    firstPage.drawText(name, {
        x: 45,
        y: 508,
        size: 13,
        font: helveticaFont,
        color: rgb(0.95, 0.1, 0.1)
    })
    firstPage.drawText('AGUILAR CISNEROS JORGE RAFAEL', {
        x: 96,
        y: 179,
        size: 7,
        font: helveticaFont,
        color: rgb(1, 1, 1)
    })
    firstPage.drawText('G-00010', {
        x: 96,
        y: 164,
        size: 7,
        font: helveticaFont,
        color: rgb(1, 1, 1)
    })
    firstPage.drawText('G', {
        x: 170,
        y: 164,
        size: 7,
        font: helveticaFont,
        color: rgb(1, 1, 1)
    })
    firstPage.drawText('México', {
        x: 207,
        y: 164,
        size: 7,
        font: helveticaFont,
        color: rgb(1, 1, 1)
    })
    firstPage.drawText('Universidad Popular Autónoma del Estado de Puebla', {
        x: 96,
        y: 150,
        size: 8,
        font: helveticaFont,
        color: rgb(1, 1, 1)
    })

    const uri = await pdfDoc.saveAsBase64({ dataUri: true });

    const pdfBytes = await pdfDoc.save()

    //document.querySelector('#myPDF').src = uri;

    //download(pdfBytes, "pdf-lib_modification_example.pdf", "application/pdf");

    Email.send({
        SecureToken: "18a4a1d9-050f-463e-88b7-c4ffc80f594",
        To: 'jorge.aguilar@upaep.mx',
        From: "javieralonso.valderrabano@upaep.edu.mx",
        Subject: "This is the subject",
        Body: 'And this is the body',
        Attachments: [
            {
                name: "membresia.pdf",
                data: `${uri}`
            }]
    }).then(
        message =>
            Swal.fire({
                icon: 'success',
                title: `${message}`,
                showConfirmButton: false,
                timer: 2000,
                allowOutsideClick: false

            }),
        setTimeout(() => {
            message == 'OK' ? location.href = 'pendientes.html' : location.href = 'usuario.html'
        }, 2200)

    );

}

const sendPDF = () => {

}