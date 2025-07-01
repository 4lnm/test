<style>
    p {
        color: #e1e1e1 !important
    }
</style>
<style>
    #root {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        overflow: hidden;
        max-height: 100vh;
        background: linear-gradient(116.2deg, #d9e5fa -.48%, #fad9f3 102.36%)
    }

    .container-pro {
        width: 88%;
        height: 310px;
        padding: 1.3rem 1.3rem .5rem;
        margin: 1.5em auto;
        text-align: center;
        background: #222;
        box-shadow: rgba(0, 0, 0, .25) 0 5px 29px -4px, rgba(0, 0, 0, .25) 0 1px 5px inset;
        border-radius: 30px
    }

    @media (min-width:900px) {
        .container-pro {
            margin-top: 30px;
            height: 370px;
            width: 750px;
            padding: 1rem
        }
    }

    @media (min-width:750px) {
        .container-pro {
            height: 350px;
            width: 550px;
            padding-bottom: 0
        }
    }

    @media (min-width:550px) {
        .container-pro {
            height: 350px;
            width: 450px;
            padding: 1.7rem 1.7rem 1rem
        }
    }

    @media (min-width:450px) {
        .container-pro {
            padding-bottom: 0;
            height: 320px;
            width: 400px
        }
    }

    .bqPRPL {
        border-radius: calc(var(--radius)/ 3)
    }

    :root {
        --lavender: #d9d9f9;
        --lavenderlight: rgb(30, 30, 30);
        --lightblue: #2b2bde;
        --link: #0019f6;
        --nav: #fff;
        --cardbg: #151515;
        --Styledlinks: #394ae4;
        --border: 1.5px solid #fff;
        --radius: 0.9rem;
        --card-radius: 15px 15px 0px 0px;
        --box-shadow: 0px 5px 29px -4px rgba(0, 0, 0, 0.25), inset 0px 1px 5px rgba(0, 0, 0, 0.25);
        --regular: 400;
        --semi-medium: 500;
        --medium: 600;
        --semi-bold: 700;
        --bold: 800
    }

    .card-pro {
        color: #000;
        box-sizing: border-box;
        height: 75%;
        margin: .3rem;
        background: var(--lavenderlight);
        border-radius: 20px;
        user-select: none;
        padding-top: 1.1rem
    }

    div,
    p {
        outline: 0
    }

    *,
    ::after,
    ::before {
        padding: 0;
        margin: 0;
        box-sizing: border-box
    }

    .search-pro {
        border: none;
        padding: .8rem 1.7rem;
        background: var(--lavender);
        font-family: inherit;
        font-weight: var(--semi-medium);
        color: #000;
        border-radius: calc(var(--radius) * 2);
        margin-top: .5rem;
        letter-spacing: 0;
        font-size: 1rem;
        filter: drop-shadow(rgba(0, 0, 0, .25) 0 2px 3px)
    }

    button {
        border: none;
        cursor: pointer;
        outline: 0;
        display: inline
    }

    .img-div {
        object-fit: cover;
        border-radius: var(--radius)
    }

    .enWSfS {
        position: relative;
        border-radius: 50%;
        height: 40px;
        width: 40px;
        border: none;
        background: var(--lavender);
        margin: 1.4rem .5rem 0 0;
        cursor: pointer
    }

    .preview-pro {
        height: 65px;
        width: 40px;
        opacity: .75
    }

    .upload-text {
        margin: 0;
        font-size: 1.1rem;
        letter-spacing: 0;
        font-weight: var(--semi-medium);
        opacity: .8;
        color: #fff
    }

    .upload-text span {
        color: var(--lightblue);
        cursor: pointer
    }

    img {
        height: 100%;
        width: 100%;
        object-fit: cover
    }

    .bBpNfQ {
        position: relative;
        height: 40px;
        width: 220px;
        display: inline-block;
        margin-top: 1.4rem
    }

    .fYdb {
        position: relative;
        border: none;
        outline: 0;
        background: var(--lavender);
        padding: 0 2.5rem;
        height: 40px;
        font-family: inherit;
        color: #000;
        border-radius: calc(var(--radius) * 2);
        font-size: 1rem
    }

    .STZed {
        display: grid;
        place-items: center;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: .8rem;
        border-radius: 50%;
        height: 24px;
        width: 24px;
        background: rgba(255, 255, 255, .7);
        cursor: pointer;
        z-index: 99
    }

    #root {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        overflow: hidden;
        max-height: 100vh;
        background: linear-gradient(116.2deg, #d9e5fa -.48%, #fad9f3 102.36%)
    }

    .img-div-pro {
        margin: auto;
        position: relative;
        border-radius: calc(var(--radius)/ 2);
        height: 120px;
        width: 200px
    }

    @media (min-width:900px) {
        .container-pro {
            margin-top: 30px;
            height: 370px;
            width: 750px;
            padding: 1rem
        }
    }

    .img-div {
        object-fit: cover;
        border-radius: var(--radius)
    }

    @media (min-width:550px) {
        .img-div-pro {
            height: 160px;
            width: 280px
        }
    }

    @media (min-width:450px) {
        .img-div-pro {
            height: 150px;
            width: 250px
        }
    }

    @media (min-width:900px) {
        .img-div-pro {
            height: 75%;
            width: 45%
        }
    }

    .enWSfS {
        position: relative;
        border-radius: 50%;
        height: 40px;
        width: 40px;
        border: none;
        background: var(--lavender);
        margin: 1.4rem .5rem 0 0;
        cursor: pointer
    }

    @media (min-width:550px) {
        .enWSfS {
            margin: 1rem .6rem 0 0
        }
    }

    @media (min-width:450px) {
        .enWSfS {
            margin: .6rem .6rem 0 0
        }
    }

    @media (min-width:750px) {
        .enWSfS {
            margin: .8rem .6rem 0 0
        }
    }

    .upload-text {
        margin: 0;
        font-size: 1.1rem;
        letter-spacing: 0;
        font-weight: var(--semi-medium);
        opacity: .8
    }

    @media (min-width:750px) {
        .upload-text {
            font-size: 1.3rem
        }
    }

    @media (min-width:450px) {
        .upload-text {
            font-size: 1.4rem
        }
    }

    @media (min-width:900px) {
        .upload-text {
            font-weight: var(--semi-medium);
            font-size: 1.6rem
        }
    }

    .preview-pro {
        margin-top: .9rem;
        height: 65px;
        width: 40px;
        opacity: .75
    }

    @media (min-width:550px) {
        .preview-pro {
            height: 80px;
            width: 60px
        }
    }

    @media (min-width:900px) {
        .preview-pro {
            margin-top: .9rem;
            height: 113px;
            width: 118px;
            opacity: .75
        }
    }

    .card-pro {
        color: #000;
        box-sizing: border-box;
        height: 75%;
        margin: .3rem;
        background: var(--lavenderlight);
        border-radius: 20px;
        user-select: none;
        padding-top: 1.1rem
    }

    @media (min-width:750px) {
        .card-pro {
            height: 75%
        }
    }

    @media (min-width:550px) {
        .card-pro {
            height: 80%
        }
    }

    @media (min-width:900px) {
        .card-pro {
            height: 78%;
            border-radius: 25px;
            margin: .8rem 1.5rem
        }
    }

    #search-input {
        align-items: center
    }

    #url {
        margin-right: 10px
    }

    #url:disabled {
        background-color: #f5f5f5;
        color: #777;
        cursor: not-allowed
    }

    .overlay-pro {
        position: fixed;
        width: 100vw;
        height: 100vh;
        inset: 0;
        background-color: rgba(0, 0, 0, .6);
        z-index: 98;
        cursor: pointer
    }

    /*! CSS Used from: Embedded */
    .duBHuL {
        display: grid;
        place-items: center;
        position: absolute;
        top: .6rem;
        right: .8rem;
        border-radius: 50%;
        height: 25px;
        width: 25px;
        background: rgba(255, 255, 255, .7);
        cursor: pointer;
        z-index: 99
    }

    .anime-pro {
        z-index: 99;
        position: absolute;
        bottom: 0;
        height: 50%;
        width: 100vw;
        background: var(--cardbg);
        border-radius: var(--card-radius)
    }

    .bXNcFD {
        background-color: var(--cardbg);
        height: 30%;
        position: relative;
        border-radius: var(--card-radius)
    }

    @media (min-width:900px) {
        .bXNcFD {
            height: 35%
        }
    }

    .CoLgZ {
        width: 120px;
        height: 170px;
        border-radius: .2rem;
        z-index: 3;
        position: relative;
        bottom: 30px
    }

    @media (min-width:550px) {
        .CoLgZ {
            width: 140px;
            height: 200px
        }
    }

    @media (min-width:660px) {
        .CoLgZ {
            width: 160px;
            height: 230px;
            bottom: 50px
        }
    }

    @media (min-width:660px) {
        .CoLgZ {
            width: 160px;
            height: 230px;
            bottom: 60px
        }
    }

    @media (min-width:900px) {
        .CoLgZ {
            width: 180px;
            height: 250px;
            bottom: 85px
        }
    }

    @media (min-width:1100px) {
        .CoLgZ {
            width: 210px;
            height: 270px;
            bottom: 90px
        }
    }

    .cDNlyh {
        border-radius: inherit
    }

    .cJssHP {
        padding: 0 .8rem;
        display: grid;
        grid-template-columns: auto 1fr;
        column-gap: 10px
    }

    @media (min-width:660px) {
        .cJssHP {
            gap: 20px
        }
    }

    .eREiWo {
        padding-top: .4rem;
        color: var(--lavender)
    }

    .hDsuPB {
        font-size: 1.2rem;
        font-weight: var(--bold)
    }

    @media (min-width:750px) {
        .hDsuPB {
            font-size: 1.8rem
        }
    }

    @media (min-width:900px) {
        .hDsuPB {
            font-size: 2.3rem
        }
    }

    .fEQOki {
        display: flex;
        -webkit-box-align: center;
        align-items: center
    }

    .hxgtkf {
        margin-top: .5rem;
        display: flex;
        gap: 10px;
        font-size: .65rem
    }

    @media (min-width:660px) {
        .hxgtkf {
            font-size: .7rem;
            margin-top: .2rem
        }
    }

    @media (min-width:900px) {
        .hxgtkf {
            font-size: 1rem;
            width: 60%
        }

        .hxgtkf>h3:nth-child(2) {
            margin-left: 10px
        }

        .hxgtkf>h3:nth-child(3) {
            margin-left: 10px
        }

        .hxgtkf>h3:nth-child(4) {
            margin-left: 10px
        }
    }

    .hxgtkf>h3 {
        font-weight: var(--semi-medium);
        font-size: 15px
    }

    .cAsrdo {
        font-weight: var(--semi-medium);
        color: #c7e423
    }

    .hhycBg {
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: auto;
        margin-top: .7rem;
        overflow: hidden
    }

    @media (min-width:660px) {
        .hhycBg {
            gap: 15px
        }
    }

    @media (min-width:900px) {
        .hhycBg {
            grid-template-columns: 66% 30%;
            gap: 45px
        }
    }

    .hhycBg>p {
        display: none;
        font-size: .8rem;
        font-weight: var(--regular)
    }

    @media (min-width:660px) {
        .hhycBg>p {
            display: block
        }
    }

    @media (min-width:750px) {
        .hhycBg>p {
            font-size: .9rem
        }
    }

    @media (min-width:900px) {
        .hhycBg>p {
            font-size: .9rem
        }
    }

    @media (min-width:1100px) {
        .hhycBg>p {
            font-size: 1.1rem
        }
    }

    .iYxMPu {
        font-size: .85rem;
        overflow: hidden
    }

    @media (min-width:900px) {
        .iYxMPu {
            font-size: .9rem
        }
    }

    @media (min-width:1100px) {
        .iYxMPu {
            font-size: 1.1rem
        }
    }

    .iazfkw {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        border-top: 1px solid rgba(255, 255, 255, .25);
        display: flex;
        -webkit-box-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        align-items: center;
        padding: .7rem 1rem
    }

    @media (min-width:660px) {
        .iazfkw {
            padding: .8rem
        }
    }

    @media (min-width:900px) {
        .iazfkw {
            padding: .6rem 1.5rem
        }
    }

    .iazfkw>span {
        font-size: .7rem
    }

    .cVVPgF {
        display: flex;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
        font-weight: var(--semi-medium);
        gap: 4px;
        color: #fff
    }

    .cVVPgF>span {
        font-size: .7rem
    }

    @media (min-width:900px) {
        .cVVPgF>span {
            font-size: 1rem
        }
    }

    .fJNrxx {
        color: var(--Styledlinks)
    }

    *,
    ::after,
    ::before {
        padding: 0;
        margin: 0;
        box-sizing: border-box
    }

    img {
        height: 100%;
        width: 100%;
        object-fit: cover
    }

    div,
    p {
        outline: 0
    }

    a {
        text-decoration: none;
        color: inherit
    }

    .kszVAv {
        position: absolute;
        width: 100%;
        height: 100%;
        inset: 0;
        background-color: rgba(0, 0, 0, .3);
        z-index: 2;
        border-radius: var(--card-radius)
    }

    .selected-image {
        height: 100%;
        width: 100%
    }
</style>
</head>
<div class="genretitle">Seach Anime by Image</div><noscript>You need to enable JavaScript to run this
    app.</noscript>
<div class="container-pro">
    <div tabindex="0" class="card-pro"><input accept="image/*" type="file" id="imageInput" autocomplete="off"
            tabindex="-1" style="display:none">
        <div class="img-div img-div-pro"><video id="video-div" controls autoplay="" loop="" src="" class="preview-pro"
                style="display:none"></video><img id="imagePreview"
                src="https://cdn.animixplay.tube/Ei-share-apple.400a26aa.svg" alt="Upload" class="preview-pro">
            <div id="imageUploadButton" class="upload-text">Drop your images,<span id="browseText">browse</span>or
                import from</div>
        </div>
    </div><button type="button" id="search-pro" class="search-pro">Search</button>
</div>

<div id="show-div"></div>
<script>$(document).ready(function () {
        const $imageInput = $('#imageInput');
        const $imageUploadButton = $('#imageUploadButton');
        const $searchButton = $('#search-pro');
        const $imagePreview = $('#imagePreview');

        $imageUploadButton.on('click', () => {
            $imageInput.click();
        });

        $searchButton.on('click', () => {
            if (!$imagePreview.attr('src') || $imagePreview.attr('src') === 'https://cdn.animixplay.tube/Ei-share-apple.400a26aa.svg') {
                alert('Please select an image before searching.');
            } else {
                const selectedFile = $imageInput[0].files[0];
                if (!selectedFile) {
                    return; // No file selected
                }

                if (!selectedFile.type.includes('image/')) {
                    alert('Selected file is not an image.');
                    return;
                }

                if (selectedFile.size > 3000000) {
                    alert('Selected file size exceeds 3MB.');
                    return;
                }
                $searchButton.html('<i class="fa fa-spinner fa-spin"></i>');
                const formData = new FormData();
                formData.append('image', selectedFile);
                $.ajax({
                    url: "https://cdn.marinn.me/dmbs/image_api.php",
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false, // Let jQuery handle content type
                    beforeSend: function () {
                        $searchButton.html('<i class="fas fa-spinner fa-spin"></i> Loading...');
                    },
                    success: function (data) {
                        if (data.result === 'success') {
                            $searchButton.html('Search');
                            $('#show-div').html(data.html);
                            if (data.video) {
                                $("#video-div").show(); // Show the div
                                $("#imagePreview").hide(); // Show the div
                                $('#video-div').attr('src', data.video);
                                $('#video-div').addClass('selected-image');
                                var video = $('#video-div')[0]; // Get the video element
                                video.removeAttribute('controls');
                                video.muted = true;
                            }
                        } else {
                            alert("we couldn't find any results");
                            $('#imagePreview').addClass('selected-image');
                            $imagePreview.attr('src', "https://cdn.animixplay.tube/Ei-share-apple.400a26aa.svg");
                            $searchButton.html('Search');
                        }
                    },
                    error: function (error) {
                        console.error('Error:', error);
                        $searchButton.html('Search');
                    }
                });
            }
        });


        $imageInput.on('change', (event) => {
            const selectedFile = event.target.files[0];
            if (selectedFile) {
                if (selectedFile.type.includes('image/') && selectedFile.size < 3000000) {
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        $("#video-div").hide(); // Show the div
                        $("#imagePreview").show(); // Show the div
                        $('#imagePreview').addClass('selected-image');
                        $imagePreview.attr('src', e.target.result);
                    };
                    reader.readAsDataURL(selectedFile);
                } else {
                    // Handle error and show message
                    alert('Invalid file. Please select an image file less than 3MB.');
                    $imageInput.val(''); // Clear the input field
                }
            }
        });


    });
    function removediv() {
        $('#show-div').html('');
    }
</script>