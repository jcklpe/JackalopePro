///////////////////////////////////////////
//- APP JAVASCRIPT

//- Module Imports
import { domReady } from "./global";


domReady(
    function (){
        const domain = window.location.origin //HACK: makes link selector relative
        const swup = new Swup({
            LINK_SELECTOR: `a[href*="${domain}"]:not([data-no-swup]), a[href^="/"]:not([data-no-swup]), a[href^="#"]:not([data-no-swup]), a[xlink\\:href]`,
        })
	//end of swup function call
    }
);