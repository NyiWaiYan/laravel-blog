<!DOCTYPE html>
<html lang="en">
<style>

*{
  background-color: ;
}

</style>
<head>
    <meta charset="UTF-8" />
    <meta
        http-equiv="X-UA-Compatible"
        content="IE=edge"
    />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    />
    <title>NwY</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
        crossorigin="anonymous"
    />
</head>

<body id="home">
    <x-navbar />
    {{$slot}}
    <x-footer />
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"
    ></script>


    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>

 

<script>
  function onScanSuccess(decodedText, decodedResult) {
     
  // handle the scanned code as you like, for example:
$("#result").val(decodedText)
}

function onScanFailure(error) {
  // handle scan failure, usually better to ignore and keep scanning.
  // for example:
  console.warn(`Code scan error = ${error}`);
}

let html5QrcodeScanner = new Html5QrcodeScanner(
  "reader",
  { fps: 10, qrbox: {width: 250, height: 250} },
  /* verbose= */ false);
html5QrcodeScanner.render(onScanSuccess, onScanFailure);
</script>













    <script src="/ckeditor/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector(".editor"), {
        licenseKey: "",
      })
        .then((editor) => {
          window.editor = editor;
        })
        .catch((error) => {
          console.error("Oops, something went wrong!");
          console.error(
            "Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:"
          );
          console.warn("Build id: 4tbxn2t1nghv-vo64egvrqxia");
          console.error(error);
        });
    </script>
</body>

</html>