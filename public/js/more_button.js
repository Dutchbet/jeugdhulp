function more_button(){
    var i, len, collapsibles = document.getElementsByClassName('collapsible');
    for (i = 0, len = collapsibles.length; i < len; i++) {
        (function(collapsible) {
            var button = collapsible.getElementsByClassName('more-button')[0];
            var growDiv = collapsible.getElementsByClassName('growable')[0];
            var test = collapsible.getElementsByClassName('title_value')[0];
            var wrapper = growDiv.getElementsByClassName('measuringWrapper')[0];
            var title_scrollmenu = document.getElementsByClassName('title_scrollmenu')[0];
            var waarden_bottom = document.getElementsByClassName('waarden-bottom')[0];
            // var navbar = document.getElementsByClassName('navbar')[0];
            var overlay = document.getElementsByClassName('overlay')[0];
            button.addEventListener('click', function() {
                if (growDiv.clientHeight) {
                  growDiv.style.height = 0;
                  test.innerHTML = "";
                  title_scrollmenu.style.background = "";
                  title_scrollmenu.style.padding = "";
                  waarden_bottom.style.bottom = "";
                  overlay.style.opacity = "0";
                  overlay.style.visibility = "hidden";
                }
                else {
                  // navbar.style.zIndex = "1";
                  waarden_bottom.style.bottom = "24%"
                  waarden_bottom.style.zIndex = "999";
                  growDiv.style.zIndex = "999";
                  growDiv.style.height = (wrapper.clientHeight + 20) + "px";
                  growDiv.style.width = "100" + "%";
                  test.innerHTML = "Waarden";
                  title_scrollmenu.style.background = "#FFFFFF";
                  title_scrollmenu.style.padding = "20px 20px 0 20px";
                  // setTimeout(function(){
                    overlay.style.opacity = "1";
                    overlay.style.visibility = "visible";
                  // }, 250);
                }
                button.value = (button.value === 'Waarden' ? 'X' : 'Waarden');

            });
        })(collapsibles[i]);
    }
}
