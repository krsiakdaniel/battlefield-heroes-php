// This script checks all links in the document and makes them 
// open in new windows if they are apply to the following rules:

// Open External Links in new windows
qOpenExternalLinks = true;

// Open PDFs in new windows
qOpenPDFLinks = true;

// Open rel="advertising" in new windows
qOpenAdLinks = true;

// Open rel="external" in new windows
qOpenRelExternalLinks = true;

// CONFIGURATION END
// Don't edit below this line!

String.prototype.startsWith = function(s) {
    return this.indexOf(s)==0; 
}

function addLoadEvent(func) { 
    var oldonload = window.onload; 
    if (typeof window.onload != 'function') { 
        window.onload = func; 
    } else { 
        window.onload = function() { 
            if (oldonload) { 
                oldonload(); 
            } 
            func(); 
        } 
    } 
} 

function OpenAdsInit(){
    for(var i=0;i<document.getElementsByTagName("a").length;i++) {
        var link = document.getElementsByTagName("a")[i];
        if(qOpenExternalLinks && link.href.match(/^(https?|ftp):\/\//)) {
            var urlend = link.href.indexOf("/",8);
            if(urlend == -1)
                urlend = link.href.length;
            if(link.href.substr(0,urlend)!=document.location.href.substr(0,urlend)) {
                link.onclick = openInNewWindow;
            }
        }
        if(qOpenPDFLinks && link.href.match(/\.pdf$/)) {
            link.onclick = openInNewWindow;
        }
        if(qOpenAdLinks && link.getAttribute("rel") && link.getAttribute("rel").match(/advertising/)) {
            link.onclick = openInNewWindow;
        }
        if(qOpenRelExternalLinks && link.getAttribute("rel") && link.getAttribute("rel").match(/external/)) {
            link.onclick = openInNewWindow;
        }
    }
}

function openInNewWindow() {
    window.open(this.href);
    return false;
}

addLoadEvent(OpenAdsInit); 