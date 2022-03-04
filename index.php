<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="html2canvas.js" type="text/javascript"></script>
</head>
<body>
    <center>        
        <div
            id="html-content-holder"
            style="
                background-image: url('uploads/fundo.jpg');
                background-size: 550px;
                width: 500px;
                height: 500px;
                margin:20px;
                padding:25px;
            "
        > 
            <div
                style="
                    float: left;
                    width:110x;
                    padding-left:0px
                "
            >
                <img src="uploads/claus.png" style="width: 100px;height:100px;" />
            </div>
            <p 
                style="
                    align-items: flex-end;
                "
            >
                Aqui vemos que o Palmeiras não tem mundial
            </p>
           
        </div>

        <input id="btn_convert" type="button" value="Download" />
        <div id="previewImg" style="display: none;">
        </div>
    </center>

    <form method="post" action="upload.php" enctype="multipart/form-data">
        <label>Arquivo:</label>
        <input type="file" name="arquivo" />
        <input type="submit" value="Enviar" />
    </form>

    <script>
        document.getElementById("btn_convert").addEventListener("click", function() {
		html2canvas(document.getElementById("html-content-holder"),
			{
				allowTaint: true,
				useCORS: true
			}).then(function (canvas) {
				var anchorTag = document.createElement("a");
				document.body.appendChild(anchorTag);
				document.getElementById("previewImg").appendChild(canvas);
				anchorTag.download = "filename.jpg";
				anchorTag.href = canvas.toDataURL();
				anchorTag.target = '_blank';
				anchorTag.click();
			});
        });
    </script>

</body>
</html>