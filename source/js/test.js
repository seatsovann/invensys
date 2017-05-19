/*Testing purpose*/


$("td:first-child,td:nth-child(2),td:nth-child(3)")
  .css({
    /* required to allow resizer embedding */
    position: "relative"
  })
  /* check .resizer CSS */
  .prepend("<div class='resizer'></div>")
  .resizable({
    resizeHeight: false,
    // we use the column as handle and filter
    // by the contained .resizer element
    handleSelector: "",
    onDragStart: function(e, $el, opt) {
      // only drag resizer
      if (!$(e.target).hasClass("resizer"))
        return false;
      return true;
    }
  });
