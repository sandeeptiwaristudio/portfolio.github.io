<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=1920, maximum-scale=1.0">
<link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png">
<meta name="og:type" content="website">
<meta name="twitter:card" content="photo">
<script id="anima-hotspots-script" src="hotspots.js"></script><script id="anima-overrides-script" src="overrides.js"></script><script src="https://animaapp.s3.amazonaws.com/js/timeline.js"></script>

</head>
<body style="margin: 0;background: #f1f0f5;">
<input type="hidden" id="anPageName" name="page" value="web19201">
<div class="container-center-horizontal">
  <form class="web19201 screen " data-id="a6c9efec-9911-4b28-893f-dd17aa9f5795" name="form1" action="form1" method="post">
    <input type="text" name="trapit" value="" style="display:none;">
    <div class="rectangle-1-6tKxqV animate-enter" data-id="083c0db9-572b-4681-8a36-c80c8dd047ea" show-on-scroll></div>
    <div class="repeat-grid-1-6tKxqV animate-enter1" data-id="c8e67f9a-84f3-4db0-997e-5cc02eafab90" show-on-scroll>
      <div class="x0-GMjMyB" data-id="11ac366a-9652-412f-8cd3-5d420ddb92e8"><a href="lic">
        <div class="home-0pEqgE manrope-bold-black-18px" data-id="0fd27f8e-9966-491f-a77e-2c2296ab2933">Home</div>
        </a></div>
      <div class="x1-GMjMyB" data-id="0f292d54-b30c-4310-9301-98bf295b7cc8"><a href="lic">
        <div class="about-o5CPV7 manrope-bold-black-18px" data-id="8a5a7d4b-22ec-4126-b6e3-1fab95cff82f">About</div>
        </a></div>
      <div class="x2-GMjMyB" data-id="6dbea00f-f5cc-4e9d-86d6-32517a9723a4"><a href="lic">
        <div class="licensing-uUu1TT manrope-bold-black-18px" data-id="d36dcb5b-6640-4eca-92a5-1d7350582490">Licensing</div>
        </a></div>
      <div class="x3-GMjMyB" data-id="263648ce-0bc4-4047-b22e-6b8e5ce4aca3"><a href="lic">
        <div class="discover-9JnTqu manrope-bold-black-18px" data-id="da5beae9-8dfe-4004-8a2a-a3588617cbf0">Discover</div>
        </a></div>
    </div>
    <img class="fh-artboard-1moore-6tKxqV animate-enter2" data-id="db96c3cf-44aa-47b7-a7a0-a1dd5efbf25b" show-on-scroll src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/647243407aff4642d0ffffba/releases/647243586499fa9c5951f3d9/img/fhartboard-1moore@1x.png" alt="fhArtboard 1moore">
    <h1 class="roman-nepali-to-unicode-6tKxqV animate-enter3" data-id="fafb0e4d-519e-413e-9c82-fda48caa01b0">Roman Nepali to Unicode<br>
      यहाँ टाईप गर्नुहोस...</h1>
    <p class="x2023-fontsai-all-rights-reserved-6tKxqV" data-id="c0597bf6-677a-4ca7-8b18-97b95a465492"><span class="span0-9laq93">2023 Fonts.ai&nbsp;&nbsp;</span><span class="span1-9laq93">|</span><span class="span2-9laq93">&nbsp;&nbsp;</span><span class="span3-9laq93"> All Rights Reserved</span></p>
    <div class="button-6tKxqV animate-enter4" data-id="9a894b54-8366-46c0-adec-fae00841ab11"><a href="javascript:SubmitForm('form1')">
      <div class="rectangle-2-ZvEEpx" data-id="835755a1-ddd8-4979-bcec-ceec34394719"></div>
      </a>
      <div class="copy-text-ZvEEpx manrope-bold-black-18px" data-id="26ae1fb2-f8b7-4b87-bf3b-b5c29820cb3b">Copy Text</div>
    </div>
    <div class="rectangle-3-6tKxqV animate-enter5" data-id="67daad1b-543e-41b9-8abd-5c3d554c5a64"></div>
  </form>
</div>
<script src="launchpad-js/launchpad-banner.js" async></script><script defer src="https://animaapp.s3.amazonaws.com/static/restart-btn.min.js"></script><script>function ShowOnScroll() {
    this.toShow = [];
    this.nextEventY = undefined;
}

ShowOnScroll.prototype.show = function(e) {
    e.style.display = "";
};

ShowOnScroll.prototype.hide = function(e) {
    e.style.display = "none";
};

ShowOnScroll.prototype.getTop = function(e) {
    if (e.Top != undefined && e.Top != 0) {
        return e.Top;
    }
    var top = 0;
    var iter = e;
    do {
        top += iter.offsetTop || 0;
        iter = iter.offsetParent;
    } while (iter);
    e.Top = top;
    return top;
};

ShowOnScroll.prototype.onScroll = function() {
    var screenBottom = window.pageYOffset + window.innerHeight;
    if (this.nextEventY == undefined || this.nextEventY > screenBottom) {
        return;
    }
    this.nextEventY = undefined;
    for (var i = 0; i < this.toShow.length; i++) {
        var e = this.toShow[i];
        var top = this.getTop(e);
        if (top < screenBottom) {
            this.show(e);
            this.toShow.shift();
            i--;
        } else {
            this.nextEventY = top;
            break;
        }
    }
};

ShowOnScroll.prototype.resetScrolling = function() {
    // Clear state
    var screenBottom = window.pageYOffset + window.innerHeight;
    for (var i = 0; i < this.toShow.length; i++) {
        var e = this.toShow[i];
        this.show(e);
    }
    this.toShow = [];
    this.nextEventY == undefined;

    // Collect items
    var itemsToShowOnScroll = Array.prototype.slice.call(document.getElementsByTagName("*"));
    itemsToShowOnScroll = itemsToShowOnScroll.filter(function(e) { return e.getAttribute("show-on-scroll") != undefined });
    var getTop = this.getTop;
    itemsToShowOnScroll.sort(function(a, b) {
        return getTop(a) - getTop(b);
    });
    for (var i = 0; i < itemsToShowOnScroll.length; i++) {
        var e = itemsToShowOnScroll[i];
        var top = this.getTop(e);
        if (top < screenBottom) {
            continue;
        }
        this.toShow.push(e);
        this.hide(e);
        this.nextEventY = this.nextEventY != undefined ? this.nextEventY : top;
    }
};

ShowOnScroll.prototype.handleEvent = function(e) {
    switch (e.type) {
        case "scroll":
            this.onScroll();
            break;
        case "resize":
            this.resetScrolling();
            break;
    }
};

ShowOnScroll.prototype.init = function() {
    this.resetScrolling();
    window.addEventListener("scroll", this);
    window.addEventListener("resize", this);
};

// After anima-src
setTimeout(function() {
    var instShowOnScroll = new ShowOnScroll();
    instShowOnScroll.init();
}, 250);</script><script>/* Copyright (c) 2016 Tobias Buschor https://goo.gl/gl0mbf | MIT License https://goo.gl/HgajeK */

if (!HTMLFormElement.prototype.reportValidity) {
    HTMLFormElement.prototype.reportValidity = function () {
        if (this.checkValidity()) return true;
        var btn = document.createElement('button');
        this.appendChild(btn);
        btn.click();
        this.removeChild(btn);
        return false;
    };
}

function SubmitForm(form_name) {
    var form = document.getElementsByName(form_name)[0];
    if (form.reportValidity()) {
        form.submit();
        if (window.submitted) window.submitted();
    }
}</script>
</body>
</html>