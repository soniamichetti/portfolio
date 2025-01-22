<style>
  #e4{
    background-color:#666;
  }
</style>

<script>
    const url = '../images/tabcompetence_sonia.pdf';
    const pdfjsLib = window['pdfjs-dist/build/pdf'];

    // Charge le PDF
    pdfjsLib.getDocument(url).promise.then(pdf => {
      pdf.getPage(1).then(page => {
        const canvas = document.getElementById('pdf-render');
        const ctx = canvas.getContext('2d');
        const viewport = page.getViewport({ scale: 1.5 });

        canvas.height = viewport.height;
        canvas.width = viewport.width;

        const renderContext = {
          canvasContext: ctx,
          viewport: viewport,
        };
        page.render(renderContext);
      });
    });
  </script>