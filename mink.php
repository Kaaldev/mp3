<?php
call(new Func(function() use (&$document, &$Image) {
  $iframes = call_method(get(new Arr(), "slice"), "call", call_method($document, "getElementsByTagName", "iframe"));
  $youtube = call_method($iframes, "filter", new Func(function($el = null) {
    return call_method(get($el, "src"), "indexOf", "youtube.com/embed") !== -1.0;
  }));
  call_method($youtube, "forEach", new Func(function($el = null) use (&$document, &$Image) {
    $this_ = Func::getContext();
    $div = call_method($document, "createElement", "div");
    call_method($div, "setAttribute", "class", "youtube");
    $playButton = call_method($document, "createElement", "div");
    call_method($playButton, "setAttribute", "class", "play-button");
    call_method($div, "appendChild", $playButton);
    $image = _new($Image);
    $id = call_method(call_method(call_method(get($el, "src"), "match", new RegExp("embed/(.*)\$", "")), "slice", -1.0), "pop");
    if (not($id)) {
      return ;
    }
    set($image, "src", _concat("https://i.ytimg.com/vi_webp/", $id, "/mqdefault.webp"));
    call_method($image, "addEventListener", "load", call_method(new Func(function() use (&$image, &$div) {
      call_method($div, "appendChild", $image);
    }), "bind", $this_, $div));
    call_method($div, "addEventListener", "click", new Func(function() use (&$document, &$id) {
      $this_ = Func::getContext();
      $iframe = call_method($document, "createElement", "iframe");
      call_method($iframe, "setAttribute", "frameborder", "0");
      call_method($iframe, "setAttribute", "allowfullscreen", "allowfullscreen");
      call_method($iframe, "setAttribute", "src", _concat("https://www.youtube.com/embed/", $id, "?rel=0&showinfo=0&autoplay=1"));
      set($this_, "innerHTML", "");
      call_method($this_, "appendChild", $iframe);
    }));
    call_method(get($el, "parentNode"), "appendChild", $div);
    call_method(get($el, "parentNode"), "removeChild", $el);
  }));
}));
