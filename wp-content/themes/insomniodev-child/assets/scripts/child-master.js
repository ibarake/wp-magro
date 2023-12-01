/**
 * Initialize the child theme scripts
 **/

inputFileHandler();

/**
 * Funcion del form-cf7. El cual hace que un archivo pueda subirse y a su vez muestre que archivo se subio
 */
function inputFileHandler() {
    let container = jQuery('.ld-input-file, .idt-input-file');
    if (!container.length) return;

    let file = container.find('input[type="file"]');

    if (!file.length) return;

    container.find('.ld-input-file__button, .idt-input-file__button').click(function () {
        $btn = jQuery(this);

        $btn.closest(container).find('input[type="file"]').click();
    });

    file.change(function (event) {
        $input = jQuery(this);

        $btn.closest(container).find('.ld-input-file__text, .idt-input-file__text').text(event.target.files[0].name);
    });
}

const _ = (param) => document.querySelector(param);

// Muestra y oculta la navegación del footer cuando está en mobile
toggleFooter();

/**
 * Función que muestra y oculta la navegación del footer cuando está en mobile
 */
function toggleFooter() {
    if ( window.innerWidth < 991 ) {
        const containers = document.querySelectorAll('.widget_nav_menu, .idt-section-4');
        if (!containers) return;
        containers.forEach((widget) => {
            widget.addEventListener('click', () => {
                let menu = widget.querySelector('.menu, address');
                if (!menu) return;
                if (menu.classList.contains('slide-animation')) return;
                widget.classList.toggle('active');
                containers.forEach((container) => {
                    if (container !== widget) {
                        let menuTemporal = _('.menu, address');
                        container.classList.remove('active');
                        if (!menuTemporal) return;
                        slideUp(menuTemporal);
                    }
                });
                // Remove all active classes
                // add active class to the clicked item
                slideToggle(menu);
            });
        });
    }
}

/**
 * Fetch requests handler
 * @param data any the data to be send on the request
 * @param url string optional the url segment to be add to the request base url
 * @param requestConfigs object optional the request configuration object. See the Fetch API Doc to check the values: https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API/Using_Fetch
 * @return void
 **/
async function fetchRequest( data, url = '', requestConfigs = {} ) {

    let endpointsBaseUrl = '';

    let headers = new Headers();

    headers.set( 'Content-Type', 'application/json; charset=UTF-8' );

    let fetchConfigs = {
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        credentials: 'same-origin',
        redirect: 'follow',
        referrerPolicy: 'origin-when-cross-origin',
        body: JSON.stringify( data ),
        headers: headers
    };

    if ( requestConfigs.hasOwnProperty( 'mode' ) ) {
        fetchConfigs.method = requestConfigs.mode;
    }

    if ( requestConfigs.hasOwnProperty( 'cache' ) ) {
        fetchConfigs.cache = requestConfigs.cache;
    }

    if ( requestConfigs.hasOwnProperty( 'credentials' ) ) {
        fetchConfigs.credentials = requestConfigs.credentials;
    }

    if ( requestConfigs.hasOwnProperty( 'redirect' ) ) {
        fetchConfigs.redirect = requestConfigs.redirect;
    }

    if ( requestConfigs.hasOwnProperty( 'referrerPolicy' ) ) {
        fetchConfigs.referrerPolicy = requestConfigs.referrerPolicy;
    }

    if ( requestConfigs.hasOwnProperty( 'body' ) ) {
        fetchConfigs.body = requestConfigs.body;
    }

    if ( requestConfigs.hasOwnProperty( 'headers' ) ) {
        fetchConfigs.headers = new Headers( requestConfigs.headers );
    }

    if ( url == '' ) {
        return;
    } else {
        endpointsBaseUrl = `${url}?action=${data.action}`;
    }

    if ( requestConfigs.hasOwnProperty( 'method' ) ) {
        if ( requestConfigs.method.toLowerCase() === 'get' || requestConfigs.method.toLowerCase() === 'head' ) {
            delete fetchConfigs.body;
        }
        fetchConfigs.method = requestConfigs.method.toUpperCase();
    }

    let request = new Request( endpointsBaseUrl.toString(), fetchConfigs );

    return await fetch( request )
        .then( statusHandler )
        .then( formatResponse )
        .catch( errorsHandler )
};

function statusHandler( response ) {
    if ( response.ok ) {
        return Promise.resolve( response );
    } else {
        return Promise.reject( new Error(response.statusText ) );
    }
}

function formatResponse( response ) {
    return response.json();
}

function errorsHandler( error ) {
    console.log( 'Request error: ', error );
}
