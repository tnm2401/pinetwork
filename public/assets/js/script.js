

// SCRIPT LOAD 
$(window).on('load', function(event) {
    $('body').removeClass('preloading');
    //    $('.load').delay(1000).fadeOut('fast');
    $('#loader').delay(400).fadeOut('fast');
});
// END SCRIPT LOAD 

// <!-- SCRIPT TAB ↓ -->
const $$ = document.querySelectorAll.bind(document)
const tabs = $$('.tab-item')
const panes = $$('.tab-pane')
const tabActive = $(".tab-item.active")
const line = $(".tabs .line")
// line.css("left", tabActive.offsetLeft + "px")
// line.css("width", tabActive.offsetWidth + "px")
tabs.forEach((tab, index) => {
    const pane = panes[index]
    tab.onclick = function(){
        $(".tab-item.active").removeClass("active")
        $(".tab-pane.active").removeClass("active")
        line.css("left", this.offsetLeft + "px")
        line.css("width", this.offsetWidth + "px")
        this.classList.add("active")
        pane.classList.add("active")
    }
})
// <!-- END SCRIPT TAB ↑ -->