<!DOCTYPE html>
<html id="html" class="no-js" prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns/fb#" xml:lang="en" lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="apple-itunes-app" content="app-id=1054982568">
    <meta name="google-play-app" content="app-id=com.addtext.app">

    <script>
        document.getElementById("html").className = "has-js";
        var isDev = false;
    </script>
    <title>AddText &mdash; Captions for your photos, quick and easy</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Easy-to-use tool for adding text and captions to your photos. Create memes, posters, photo captions and much more!" />
    <meta name="keywords" content="photo text, photo word, captioning, caption this, captions for photos, add text to photo, meme generator" />

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <script>
        var isPremiumUser = false;
    </script>

    <div class="main-content cf js-photo-page">
    <div class="row maker-row">

        <div class="preview-image-wrapper two-third-col last-col">
        

            <div id="canvas-wrapper" class="canvas-wrapper">
                
                <div class="loading-msg loading-image-msg" id="loading-image-msg">
                    <div class="loading-msg-center center-self no-js-hide">
                        <p>Loading your image..</p>
                        <img class="spinner loading-image-spinner" src='https://images.addtext.com/images/spinner.gif' alt='Spinner'/>
                    </div>
                    
                    
                    <noscript>
                    <p class="error-msg">AddText requires JavaScript to work. Please enable JavaScript in your browser.</p>
                    </noscript>
                    <p id="init-vectos-info" class="error-msg hide"></p>
                </div>
            </div>
            <div class="scale-bg-settings js-scale-bg-settings hide">
                <input id="scale-bg-checkbox" class="js-scale-bg-checkbox" type="checkbox" checked> <label for="scale-bg-checkbox">Scale image</label><span class="js-scale-bg-more-info-trigger"><i class="more-info icon-question-sign"></i><span class="fontface-fallback more-info">?</span>
                </span>
            </div>
            <div class="button massive next-btn fade-in">
                Save</i>
            </div>
             
            
            
        </div>
            
        <div class="maker-modules third-col">
        <div class="button addText-btn">
                <i class="icon-plus"></i>Add Text
            </div>
            
            
            <div class="text-modules">
                
                <div class="maker-module message hide"><h1>CLICK ON TEXT TO EDIT</h1>
                <span class="drop-file-here-options-separator line-through">or</span>
                <h4> Press the "Add Text" button</h4></div>
                
            </div>
            
            
            
            
            <div class="drop-file-here cf" title="Click or drag a new photo here .">
                <input title="Click or drag a new photo here change photo." class="file-browse-trigger" type="file" name="image-select-browse" data-url="/Upload">
                <div class="drop-file-here-msg">
                    <i class="icon-picture"></i>Change photo?
                    <span class="drop-file-here-extra">Click, or drag a new photo here!</span>
                </div>
            </div>
            
            <button type="button" class="button plain watermark-info-link js-watermark-info-trigger">Remove watermark</button>
             
            
        </div>
        

        <div class="mobile-only maker-toolbar no-select">
            <div class="maker-toolbar-button button textGroup-btn selected" data-id="1">
                Text 1
                <i class="maker-error-refresh-btn textGroup-btn-refresh icon-refresh hide" id="maker-toolbar-text1Refresh"></i>
                <img class="spinner textGroup-btn-spinner fade-out hide" id="maker-toolbar-text1Spinner" src="https://images.addtext.com/images/spinner.gif" alt="Spinner">
            </div>

            <div class="maker-toolbar-button button light next-btn fade-in">
                Next &nbsp;<i class="icon-arrow-right"></i>
            </div>
            <div class="maker-toolbar-button button addText-btn">
                <i class="icon-plus"></i><span class="fontface-label">T</span>
                <span class="fontface-fallback">Add </span>
            </div>
        </div>
    </div>
</div>

<div class="save-share-image modal-container cf hide">
    <div class="modal blue cf">
        <i class="modal-close icon-remove"></i><span class="fontface-fallback modal-close">X</span>
        <section class="save-share-section">
            <div class="save-share-image-more-options">
                <div class="button inline" id="download-btn">
                    <i class="icon-save icon-2x"></i>Confirm Save
                </div>
            </div>
        </section>
        <div class="wait-msg hide" id="makeSavePage-wait-msg">
            <p>Generating your image...</p>
            <img class="spinner save-share-spinner js-wait-modal-spinner" src='https://images.addtext.com/images/spinner.gif' alt='Spinner'/>
            <p class="error-msg hide" id="save-share-error"></p>
            
        </div>
    </div>
</div>

<div class="progress-modal js-progress-modal modal-container cf hide">
    <div class="modal blue cf">
        <i class="modal-close icon-remove"></i><span class="fontface-fallback modal-close">&times;</span>
        <h2 class="modal-title">Uploading..</h2>
        <div class="progress-div js-progress">
                <div class="progress-bar"></div>
        </div>
        <button class="plain js-cancel-upload" type="button">Cancel</button>
    </div>
</div>

<div class="scale-bg-info-modal js-scale-bg-info-modal modal-container cf hide">
    <div class="modal blue cf">
        <i class="modal-close icon-remove"></i><span class="fontface-fallback modal-close">&times;</span>
        <h2 class="modal-title">Scale Image</h2>
        <p>Scaling down a large image means that it will fit better on the page, and so will the text you put on it. Your final image will still be large enough for all everyday uses. </p>
        <p>Scaling does reduce the dimensions of the final image though, so if you don't want this to happen, just uncheck the <strong>Scale image</strong> checkbox!</p>
    </div>
</div>
<div class="js-watermark-info-modal modal-container cf hide">
    <div class="modal blue cf">
        <i class="modal-close icon-remove"></i><span class="fontface-fallback modal-close">&times;</span>
        <h2 class="modal-title">Remove watermarks</h2>
        <p>Become a <strong>Premium member</strong> and add text to your photos without any added watermarks. You'll get unlimited use for one year &mdash; you have nothing to lose except the watermarks!</p>
        
        <p>
            <small style="opacity:.85;">The purchase will be made on FlamingText.com, our main site. You will be purchasing a FlamingText Premium membership, which will work on FlamingText.com as well as remove the watermarks on AddText.com.</small>
        </p>
        <div class="pull-right group">
            <span class="group--inline">
                <span class="price-wrap"><sup>$</sup>19<sup>95</sup></span> / year
            </span>
            <a href="https://flamingtext.com/Store/buy?&item_number=18&_loc=at_watermark" class="button inline" type="button" >Buy</a>
        </div>
        <p>
            <small style="opacity:.85;"><br/><br/>Already a member? Great! <a href="/Account/login"><strong>Login</strong></a></small>
        </p>    
    </div>
</div>

<div class="js-premium-logo-info-modal modal-container cf hide">
    <div class="modal blue cf">
        <i class="modal-close icon-remove"></i><span class="fontface-fallback modal-close">&times;</span>
        <h2 class="modal-title">AddText Premium</h2>
        <p>Become a <strong>Premium member</strong> and get access to hundreds of different text styles! As a member you'll also have no watermarks on the photos you make. Become a member today! The membership is valid for one year.</p>
        
        <p>
            <small style="opacity:.85;">The purchase will be made on FlamingText.com, our main site. You will be purchasing a FlamingText Premium membership, which will work on FlamingText.com as well as on AddText.com.</small>
        </p>
        <div class="pull-right group">
            <span class="group--inline">
                <span class="price-wrap"><sup>$</sup>19<sup>95</sup></span> / year
            </span>
            <a href="https://flamingtext.com/Store/buy?&item_number=18&_loc=at_premium_logo" class="button inline js-premium-logo-info-modal-btn" type="button" >Buy</a>
        </div>
        <p>
            <small style="opacity:.85;"><br/><br/>Already a member? Great! <a href="/Account/login">Login Here</a></small>
        </p>    
        
    </div>
</div>

<div class='button light tooltip hide fade-in'>
    <span class='tooltip-msg'></span>
    <i class='tooltip-close-btn icon-remove'></i><span class="fontface-fallback modal-close">X</span>
</div>

<img id="savedImage">

<script>
var isPremiumUser = false;
</script>
    <script>
        var isPremiumUser = false;
    </script>

    <link rel="stylesheet" href="assets/css/addtext.min.css" media="all" />
    <!--[if (lt IE 9)&(!IEMobile 7)]><link rel="stylesheet" href="https://images.addtext.com/css/desktop-oldIE-800.min.css" media="all" /><![endif]-->

    <script src="assets/js/addtext-800.min.js"></script>

    <script>
        var imgHost = "https://images.addtext.com";
        var ftHost = "https://flamingtext.com";
        var bgFail = "false"; //needed for home page

        $(document).ready(function() {
            //run page specific JS (loaded in main JS)
            if ($(".js-photo-page").length) {
                atEditor();
            } else if ($(".js-home-page").length) {
                atHome();
            }

            function historyAPI() {
                //detection from modernizer.
                var ua = navigator.userAgent;
                // remove false positive browser(s)
                if (ua.indexOf('Android 2') !== -1 &&
                    ua.indexOf('Mobile Safari') !== -1 &&
                    ua.indexOf('Chrome') === -1) {
                    return false;
                }
                // Regular check for everyone else
                if (typeof window.history !== "undefined" && 'replaceState' in history) {
                    return true;
                }
            }
            if (historyAPI()) {
                //cleanup url params - after statbot has got them.
                $(document).ready(function() {
                    var rmParams = "(bgFail|_loc|_action)"; //explicitly list what params to remove
                    var currUrl = location.protocol + "//" + location.host + location.pathname;
                    //if (!/^(f|ht)tps?:\/\//i.test(currUrl))
                    //currUrl = "//" + currUrl;

                    var params = location.search;
                    var re = new RegExp("([&]*" + rmParams + ")=[^&]+", "g");
                    params = params.replace(re, "").replace(new RegExp("(\\?)$"), ""); //remove terminating paramstarters
                    window.history.replaceState(null, null, currUrl + params + location.hash); //make sure to keep hash fragments!
                });
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#Cap").val("42").hide();
        });
    </script>
    <script type="text/javascript">
        $("#changeImage").change(function() {
            $('#uploadImageForm').submit();
        });
    </script>
    <script type="text/javascript">
        /*var s = new XMLSerializer().serializeToString(document.getElementById("customSvgId"));
          var encodedData = window.btoa(s);
          $('#canvasImage').prop('src', 'data:image/svg+xml;base64,'+encodedData);*/

        function escapeRegExp(str) {
            return str.replace(/([.*+?^=!:${}()|\[\]\/\\])/g, "\\$1");
        }

        function replaceAll(str, find, replace) {
            return str.replace(new RegExp(escapeRegExp(find), 'g'), replace);
        }
        function drawInlineSVG(ctx, rawSVG, callback) {
        	console.log("test 3");
		    var svg = new Blob([rawSVG], {type:"image/svg+xml;charset=utf-8"}),
		        domURL = self.URL || self.webkitURL || self,
		        url = domURL.createObjectURL(svg),
		        img = $('#canvasImage');

		    	img.prop('src', url);
		        //ctx.drawImage(this, 0, 0);     
		        //domURL.revokeObjectURL(url);
		        console.log("TEST");
		        //callback(this);
		}

		function svg_to_png() {
		    var wrapper = document.getElementById(container);
		    var svg = wrapper.querySelector("svg");

		    if (typeof window.XMLSerializer != "undefined") {
		        var svgData = (new XMLSerializer()).serializeToString(svg);
		    } else if (typeof svg.xml != "undefined") {
		        var svgData = svg.xml;
		    }

		    var canvas = document.createElement("canvas");
		    var svgSize = svg.getBoundingClientRect();
		    canvas.width = svgSize.width;
		    canvas.height = svgSize.height;
		    var ctx = canvas.getContext("2d");

		    var img = document.createElement("img");
		    img.setAttribute("src", "data:image/svg+xml;base64," + btoa(unescape(encodeURIComponent(svgData))) );

		    img.onload = function() {
		        ctx.drawImage(img, 0, 0);
		        var imgsrc = canvas.toDataURL("image/png");
		        console.log("imgsrc", imgsrc);
		        var a = document.createElement("a");
		        a.download = container+".png";
		        a.href = imgsrc;
		        a.click();
		    };
		}

        function downloadOrShare() {

            //customSvgId
            var svg = document.getElementById('customSvgId').outerHTML;
            console.log(svg);
        	// get Canvas Element
			var myCanvas = document.getElementById('canvas');
			// get 2D context
			var myCanvasContext = myCanvas.getContext('2d');
			// Load up our image.
			var source = new Image();
			//source.src = 'data:image/svg+xml;charset=UTF-8,' + $('#customSvgId')[0].outerHTML;

			//source.src = 'http://demo.sodhanalibrary.com/img/twitter.svg';
			source.src = '/drawingtool/uploads/converted.svg';

            var xml  = new XMLSerializer().serializeToString(svg),
                data = "data:image/svg+xml;base64," + btoa(xml),
                img  = new Image()

            img.setAttribute('src', data);
            document.body.appendChild(img);

			// Render our SVG image to the canvas once it loads.
			console.log("Called");
			source.onload = function(){
				console.log("INSIDE");
			   	myCanvasContext.drawImage(source,0,0,200,200);
			}
			$("#canvasImage").attr("src",myCanvas.toDataURL("image/png"));
        	
        }
    </script>
</body>

</html>