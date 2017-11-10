var BirstReport = function ( container, options ) {
    'use strict';
    console.log("in BirstReport");
    console.log("container: " + container);
    if ( container === null ) {
        return;
    }
    this.options = options;
    this.container = document.getElementById( container );
    console.log("this.container: " + this.container);
    this.iframeId = container + "-iframe";
};

BirstReport.prototype.postData = function ( data ) {
    this.iframe.contentWindow.postMessage( data, "*" );
}

BirstReport.prototype.getData = function ( query, callerId ) {
    window.parent.postMessage( {operation : 'executeQuery', query : query, callerId : callerId}, "*" );
}

BirstReport.prototype.init = function () {
    "use strict";
    var _self = this;

    console.log("in init");
    console.log("option.iframeSrc: " + this.options.iframeSrc);

    if ( this.options.iframeSrc ) {
        _self.container.innerHTML = _self.getFrameDefBySrc( this.options.iframeSrc );
        _self.iframe = document.getElementById( _self.iframeId );
        console.log(_self.iframe);
        _self.resetDimension();
    }
    else {
        var xhr = new XMLHttpRequest();

        var tokenUrl = this.options.applicationUrl + "/TokenGenerator.aspx?";
        tokenUrl += "username=" + this.options.username;
        tokenUrl += "&ssopassword=" + this.options.ssopassword;
        tokenUrl += "&BirstSpaceId=" + this.options.spaceId;

        xhr.open( 'POST', tokenUrl );
        xhr.setRequestHeader( 'Content-Type', 'application/json' );
        xhr.addEventListener( 'load', function ( e ) {
            var token = xhr.responseText; //or e.responseText
            _self.container.innerHTML = _self.getFrameDefByToken( token );
            _self.iframe = document.getElementById( _self.iframeId );
            _self.resetDimension();

        }, false );
        xhr.addEventListener( "error", function ( e ) {
            alert( "Installation Failed: Invalid Token" );
        }, false );
        xhr.send( null );
    }

};

BirstReport.prototype.resetDimension = function () {
    "use strict";
    if ( this.options.width || this.options.height ) {
        if ( this.options.width ) {
            this.iframe.width = this.options.width;
        }
        if ( this.options.height ) {
            this.iframe.height = this.options.height;
        }
        this.container.style.overflow = "auto";
        this.container.style.setProperty( 'position', 'relative', 'important' );
    }
    else {
        this.container.style.setProperty( 'position', 'relative', 'important' );
        this.container.style.setProperty( 'overflow', 'hidden', 'important' );

        //for iframe
        this.iframe.style.setProperty( 'position', 'absolute', 'important' );
        this.iframe.style.setProperty( 'top', 0, 'important' );
        this.iframe.style.setProperty( 'left', 0, 'important' );
        this.iframe.style.setProperty( 'width', '100%', 'important' );
        this.iframe.style.setProperty( 'height', '100%', 'important' );
    }

};

BirstReport.prototype.getFrameDefByToken = function ( token ) {
    'use strict';
    var paramString = this.getIframeSrc( token );
    var frameDef = "<iframe id=\"" + this.iframeId + "\" scrolling='yes' frameborder=\"0\" ";
    frameDef += " src=\"" + paramString;
    frameDef += "\" ";
    frameDef += "></iframe>";
    return frameDef;
};
BirstReport.prototype.getFrameDefBySrc = function ( src ) {
    'use strict';
    var frameDef = "<iframe id=\"" + this.iframeId + "\" scrolling='yes' frameborder=\"0\" ";
    frameDef += " src=\"" + src;
    frameDef += "\" ";
    frameDef += "></iframe>";
    return frameDef;
};
BirstReport.prototype.getIframeSrc = function ( token ) {
    "use strict";
    var parseString = this.options.applicationUrl + (this.options.applicationUrl.substr( -1 ) === "/" ? "" : "/");
    parseString += "SSO.aspx?BirstSSOToken=" + token;
    for ( var propertyName in this.options ) {
        if ( propertyName === "applicationUrl" || propertyName === "username" || propertyName === "ssopassword" || propertyName === "spaceId" || propertyName === "token" ) {
            continue;
        }
        else {
            parseString += "&" + propertyName + "=" + this.options[propertyName];
        }
    }
    return parseString;
};

var BirstConfig = {
    create : function ( container, options ) {
        'use strict';
        console.log("in BirstConfig.create");
        this.report = new BirstReport( container, options );
        console.log("report: " + this.report);
        this.report.init();
    },
    callBack : function ( listener ) {
        var _self=this;
        window.onmessage = function ( e ) {
            if ( e.data.operation === "executeQueryResult" ) {
                if ( e.data.callerId === _self.messageId ) {
                    listener( e );
                }
            } else {
                listener( e );
            }

        };
    },
    postData : function ( data ) {
        this.report.postData( data );
    },
    getData : function ( query ) {
        if ( !this.report ) {
            this.report = new BirstReport();
        }
        this.messageId = new Date().getTime() + "-" + Math.random();
        this.report.getData( query, this.messageId );
    }
};
