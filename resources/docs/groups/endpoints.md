# Endpoints


## Login using the given user ID / email.




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/_dusk/login/minus/hic" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/_dusk/login/minus/hic"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "Auth guard [hic] is not defined.",
    "exception": "InvalidArgumentException",
    "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\AuthManager.php",
    "line": 84,
    "trace": [
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\AuthManager.php",
            "line": 68,
            "function": "resolve",
            "class": "Illuminate\\Auth\\AuthManager",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Facades\\Facade.php",
            "line": 261,
            "function": "guard",
            "class": "Illuminate\\Auth\\AuthManager",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\dusk\\src\\Http\\Controllers\\UserController.php",
            "line": 42,
            "function": "__callStatic",
            "class": "Illuminate\\Support\\Facades\\Facade",
            "type": "::"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php",
            "line": 48,
            "function": "login",
            "class": "Laravel\\Dusk\\Http\\Controllers\\UserController",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 255,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 197,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 691,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\app\\Http\\Middleware\\SetLocale.php",
            "line": 24,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "App\\Http\\Middleware\\SetLocale",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\app\\Http\\Middleware\\AuthGates.php",
            "line": 32,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "App\\Http\\Middleware\\AuthGates",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php",
            "line": 49,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\View\\Middleware\\ShareErrorsFromSession",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 121,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 63,
            "function": "handleStatefulRequest",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php",
            "line": 67,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 693,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 668,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 634,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 623,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 87,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 323,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 235,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 171,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 126,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 118,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 596,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 258,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\symfony\\console\\Application.php",
            "line": 920,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\symfony\\console\\Application.php",
            "line": 266,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\symfony\\console\\Application.php",
            "line": 142,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GET_dusk-login--userId---guard--" hidden>
    <blockquote>Received response<span id="execution-response-status-GET_dusk-login--userId---guard--"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET_dusk-login--userId---guard--"></code></pre>
</div>
<div id="execution-error-GET_dusk-login--userId---guard--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET_dusk-login--userId---guard--"></code></pre>
</div>
<form id="form-GET_dusk-login--userId---guard--" data-method="GET" data-path="_dusk/login/{userId}/{guard?}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GET_dusk-login--userId---guard--', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET_dusk-login--userId---guard--" onclick="tryItOut('GET_dusk-login--userId---guard--');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET_dusk-login--userId---guard--" onclick="cancelTryOut('GET_dusk-login--userId---guard--');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET_dusk-login--userId---guard--" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>_dusk/login/{userId}/{guard?}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>userId</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="userId" data-endpoint="GET_dusk-login--userId---guard--" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>guard</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="guard" data-endpoint="GET_dusk-login--userId---guard--" data-component="url"  hidden>
<br>
</p>
</form>


## Log the user out of the application.




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/_dusk/logout/neque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/_dusk/logout/neque"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "Auth guard [neque] is not defined.",
    "exception": "InvalidArgumentException",
    "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\AuthManager.php",
    "line": 84,
    "trace": [
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\AuthManager.php",
            "line": 68,
            "function": "resolve",
            "class": "Illuminate\\Auth\\AuthManager",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Facades\\Facade.php",
            "line": 261,
            "function": "guard",
            "class": "Illuminate\\Auth\\AuthManager",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\dusk\\src\\Http\\Controllers\\UserController.php",
            "line": 59,
            "function": "__callStatic",
            "class": "Illuminate\\Support\\Facades\\Facade",
            "type": "::"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php",
            "line": 48,
            "function": "logout",
            "class": "Laravel\\Dusk\\Http\\Controllers\\UserController",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 255,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 197,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 691,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\app\\Http\\Middleware\\SetLocale.php",
            "line": 24,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "App\\Http\\Middleware\\SetLocale",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\app\\Http\\Middleware\\AuthGates.php",
            "line": 32,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "App\\Http\\Middleware\\AuthGates",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php",
            "line": 49,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\View\\Middleware\\ShareErrorsFromSession",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 121,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 63,
            "function": "handleStatefulRequest",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php",
            "line": 67,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 693,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 668,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 634,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 623,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 87,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 323,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 235,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 171,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 126,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 118,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 596,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 258,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\symfony\\console\\Application.php",
            "line": 920,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\symfony\\console\\Application.php",
            "line": 266,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\symfony\\console\\Application.php",
            "line": 142,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GET_dusk-logout--guard--" hidden>
    <blockquote>Received response<span id="execution-response-status-GET_dusk-logout--guard--"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET_dusk-logout--guard--"></code></pre>
</div>
<div id="execution-error-GET_dusk-logout--guard--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET_dusk-logout--guard--"></code></pre>
</div>
<form id="form-GET_dusk-logout--guard--" data-method="GET" data-path="_dusk/logout/{guard?}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GET_dusk-logout--guard--', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET_dusk-logout--guard--" onclick="tryItOut('GET_dusk-logout--guard--');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET_dusk-logout--guard--" onclick="cancelTryOut('GET_dusk-logout--guard--');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET_dusk-logout--guard--" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>_dusk/logout/{guard?}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>guard</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="guard" data-endpoint="GET_dusk-logout--guard--" data-component="url"  hidden>
<br>
</p>
</form>


## Retrieve the authenticated user identifier and class name.




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/_dusk/user/optio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/_dusk/user/optio"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "Auth guard [optio] is not defined.",
    "exception": "InvalidArgumentException",
    "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\AuthManager.php",
    "line": 84,
    "trace": [
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\AuthManager.php",
            "line": 68,
            "function": "resolve",
            "class": "Illuminate\\Auth\\AuthManager",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Facades\\Facade.php",
            "line": 261,
            "function": "guard",
            "class": "Illuminate\\Auth\\AuthManager",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\dusk\\src\\Http\\Controllers\\UserController.php",
            "line": 19,
            "function": "__callStatic",
            "class": "Illuminate\\Support\\Facades\\Facade",
            "type": "::"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php",
            "line": 48,
            "function": "user",
            "class": "Laravel\\Dusk\\Http\\Controllers\\UserController",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 255,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 197,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 691,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\app\\Http\\Middleware\\SetLocale.php",
            "line": 24,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "App\\Http\\Middleware\\SetLocale",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\app\\Http\\Middleware\\AuthGates.php",
            "line": 32,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "App\\Http\\Middleware\\AuthGates",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php",
            "line": 49,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\View\\Middleware\\ShareErrorsFromSession",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 121,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 63,
            "function": "handleStatefulRequest",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php",
            "line": 67,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 693,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 668,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 634,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 623,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 87,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 323,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 235,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 171,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 126,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 118,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 596,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 258,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\symfony\\console\\Application.php",
            "line": 920,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\symfony\\console\\Application.php",
            "line": 266,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\symfony\\console\\Application.php",
            "line": 142,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\Users\\ASUS\\Desktop\\test\\MammaSend\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GET_dusk-user--guard--" hidden>
    <blockquote>Received response<span id="execution-response-status-GET_dusk-user--guard--"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET_dusk-user--guard--"></code></pre>
</div>
<div id="execution-error-GET_dusk-user--guard--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET_dusk-user--guard--"></code></pre>
</div>
<form id="form-GET_dusk-user--guard--" data-method="GET" data-path="_dusk/user/{guard?}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GET_dusk-user--guard--', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET_dusk-user--guard--" onclick="tryItOut('GET_dusk-user--guard--');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET_dusk-user--guard--" onclick="cancelTryOut('GET_dusk-user--guard--');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET_dusk-user--guard--" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>_dusk/user/{guard?}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>guard</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="guard" data-endpoint="GET_dusk-user--guard--" data-component="url"  hidden>
<br>
</p>
</form>


## api/v1/permissions




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/api/v1/permissions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/permissions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-permissions" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-permissions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-permissions"></code></pre>
</div>
<div id="execution-error-GETapi-v1-permissions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-permissions"></code></pre>
</div>
<form id="form-GETapi-v1-permissions" data-method="GET" data-path="api/v1/permissions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-permissions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-permissions" onclick="tryItOut('GETapi-v1-permissions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-permissions" onclick="cancelTryOut('GETapi-v1-permissions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-permissions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/permissions</code></b>
</p>
</form>


## api/v1/permissions




> Example request:

```bash
curl -X POST \
    "http://MammaSend.test/api/v1/permissions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"id"}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/permissions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "id"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-permissions" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-permissions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-permissions"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-permissions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-permissions"></code></pre>
</div>
<form id="form-POSTapi-v1-permissions" data-method="POST" data-path="api/v1/permissions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-permissions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-permissions" onclick="tryItOut('POSTapi-v1-permissions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-permissions" onclick="cancelTryOut('POSTapi-v1-permissions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-permissions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/permissions</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTapi-v1-permissions" data-component="body" required  hidden>
<br>
</p>

</form>


## api/v1/permissions/{permission}




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/api/v1/permissions/aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/permissions/aut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-permissions--permission-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-permissions--permission-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-permissions--permission-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-permissions--permission-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-permissions--permission-"></code></pre>
</div>
<form id="form-GETapi-v1-permissions--permission-" data-method="GET" data-path="api/v1/permissions/{permission}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-permissions--permission-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-permissions--permission-" onclick="tryItOut('GETapi-v1-permissions--permission-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-permissions--permission-" onclick="cancelTryOut('GETapi-v1-permissions--permission-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-permissions--permission-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/permissions/{permission}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>permission</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="permission" data-endpoint="GETapi-v1-permissions--permission-" data-component="url" required  hidden>
<br>
</p>
</form>


## api/v1/permissions/{permission}




> Example request:

```bash
curl -X PUT \
    "http://MammaSend.test/api/v1/permissions/cum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"blanditiis"}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/permissions/cum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "blanditiis"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-v1-permissions--permission-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-permissions--permission-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-permissions--permission-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-permissions--permission-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-permissions--permission-"></code></pre>
</div>
<form id="form-PUTapi-v1-permissions--permission-" data-method="PUT" data-path="api/v1/permissions/{permission}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-permissions--permission-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-permissions--permission-" onclick="tryItOut('PUTapi-v1-permissions--permission-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-permissions--permission-" onclick="cancelTryOut('PUTapi-v1-permissions--permission-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-permissions--permission-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/permissions/{permission}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/v1/permissions/{permission}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>permission</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="permission" data-endpoint="PUTapi-v1-permissions--permission-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="PUTapi-v1-permissions--permission-" data-component="body" required  hidden>
<br>
</p>

</form>


## api/v1/permissions/{permission}




> Example request:

```bash
curl -X DELETE \
    "http://MammaSend.test/api/v1/permissions/soluta" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/permissions/soluta"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-v1-permissions--permission-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-permissions--permission-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-permissions--permission-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-permissions--permission-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-permissions--permission-"></code></pre>
</div>
<form id="form-DELETEapi-v1-permissions--permission-" data-method="DELETE" data-path="api/v1/permissions/{permission}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-permissions--permission-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-permissions--permission-" onclick="tryItOut('DELETEapi-v1-permissions--permission-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-permissions--permission-" onclick="cancelTryOut('DELETEapi-v1-permissions--permission-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-permissions--permission-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/permissions/{permission}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>permission</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="permission" data-endpoint="DELETEapi-v1-permissions--permission-" data-component="url" required  hidden>
<br>
</p>
</form>


## api/v1/roles




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/api/v1/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-roles" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-roles"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-roles"></code></pre>
</div>
<div id="execution-error-GETapi-v1-roles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-roles"></code></pre>
</div>
<form id="form-GETapi-v1-roles" data-method="GET" data-path="api/v1/roles" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-roles', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-roles" onclick="tryItOut('GETapi-v1-roles');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-roles" onclick="cancelTryOut('GETapi-v1-roles');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-roles" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/roles</code></b>
</p>
</form>


## api/v1/roles




> Example request:

```bash
curl -X POST \
    "http://MammaSend.test/api/v1/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"sed","permissions":[20,2]}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "sed",
    "permissions": [
        20,
        2
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-roles" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-roles"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-roles"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-roles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-roles"></code></pre>
</div>
<form id="form-POSTapi-v1-roles" data-method="POST" data-path="api/v1/roles" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-roles', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-roles" onclick="tryItOut('POSTapi-v1-roles');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-roles" onclick="cancelTryOut('POSTapi-v1-roles');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-roles" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/roles</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTapi-v1-roles" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>permissions</code></b>&nbsp;&nbsp;<small>integer[]</small>     <i>optional</i> &nbsp;
<input type="number" name="permissions.0" data-endpoint="POSTapi-v1-roles" data-component="body"  hidden>
<input type="number" name="permissions.1" data-endpoint="POSTapi-v1-roles" data-component="body" hidden>
<br>
</p>

</form>


## api/v1/roles/{role}




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/api/v1/roles/occaecati" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/roles/occaecati"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-roles--role-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-roles--role-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-roles--role-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-roles--role-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-roles--role-"></code></pre>
</div>
<form id="form-GETapi-v1-roles--role-" data-method="GET" data-path="api/v1/roles/{role}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-roles--role-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-roles--role-" onclick="tryItOut('GETapi-v1-roles--role-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-roles--role-" onclick="cancelTryOut('GETapi-v1-roles--role-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-roles--role-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/roles/{role}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>role</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="role" data-endpoint="GETapi-v1-roles--role-" data-component="url" required  hidden>
<br>
</p>
</form>


## api/v1/roles/{role}




> Example request:

```bash
curl -X PUT \
    "http://MammaSend.test/api/v1/roles/quidem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"ut","permissions":[3,8]}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/roles/quidem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "ut",
    "permissions": [
        3,
        8
    ]
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-v1-roles--role-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-roles--role-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-roles--role-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-roles--role-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-roles--role-"></code></pre>
</div>
<form id="form-PUTapi-v1-roles--role-" data-method="PUT" data-path="api/v1/roles/{role}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-roles--role-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-roles--role-" onclick="tryItOut('PUTapi-v1-roles--role-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-roles--role-" onclick="cancelTryOut('PUTapi-v1-roles--role-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-roles--role-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/roles/{role}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/v1/roles/{role}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>role</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="role" data-endpoint="PUTapi-v1-roles--role-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="PUTapi-v1-roles--role-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>permissions</code></b>&nbsp;&nbsp;<small>integer[]</small>     <i>optional</i> &nbsp;
<input type="number" name="permissions.0" data-endpoint="PUTapi-v1-roles--role-" data-component="body"  hidden>
<input type="number" name="permissions.1" data-endpoint="PUTapi-v1-roles--role-" data-component="body" hidden>
<br>
</p>

</form>


## api/v1/roles/{role}




> Example request:

```bash
curl -X DELETE \
    "http://MammaSend.test/api/v1/roles/eos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/roles/eos"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-v1-roles--role-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-roles--role-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-roles--role-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-roles--role-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-roles--role-"></code></pre>
</div>
<form id="form-DELETEapi-v1-roles--role-" data-method="DELETE" data-path="api/v1/roles/{role}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-roles--role-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-roles--role-" onclick="tryItOut('DELETEapi-v1-roles--role-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-roles--role-" onclick="cancelTryOut('DELETEapi-v1-roles--role-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-roles--role-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/roles/{role}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>role</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="role" data-endpoint="DELETEapi-v1-roles--role-" data-component="url" required  hidden>
<br>
</p>
</form>


## api/v1/users




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/api/v1/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-users" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-users"></code></pre>
</div>
<div id="execution-error-GETapi-v1-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-users"></code></pre>
</div>
<form id="form-GETapi-v1-users" data-method="GET" data-path="api/v1/users" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-users" onclick="tryItOut('GETapi-v1-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-users" onclick="cancelTryOut('GETapi-v1-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/users</code></b>
</p>
</form>


## api/v1/users




> Example request:

```bash
curl -X POST \
    "http://MammaSend.test/api/v1/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"omnis","email":"nemo","password":"et","roles":[5,2]}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "omnis",
    "email": "nemo",
    "password": "et",
    "roles": [
        5,
        2
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-users" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-users"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-users"></code></pre>
</div>
<form id="form-POSTapi-v1-users" data-method="POST" data-path="api/v1/users" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-users" onclick="tryItOut('POSTapi-v1-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-users" onclick="cancelTryOut('POSTapi-v1-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/users</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-users" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-v1-users" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-v1-users" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>roles</code></b>&nbsp;&nbsp;<small>integer[]</small>     <i>optional</i> &nbsp;
<input type="number" name="roles.0" data-endpoint="POSTapi-v1-users" data-component="body"  hidden>
<input type="number" name="roles.1" data-endpoint="POSTapi-v1-users" data-component="body" hidden>
<br>
</p>

</form>


## api/v1/users/{user}




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/api/v1/users/eum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/users/eum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-users--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-users--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-users--user-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-users--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-users--user-"></code></pre>
</div>
<form id="form-GETapi-v1-users--user-" data-method="GET" data-path="api/v1/users/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-users--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-users--user-" onclick="tryItOut('GETapi-v1-users--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-users--user-" onclick="cancelTryOut('GETapi-v1-users--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-users--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/users/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="GETapi-v1-users--user-" data-component="url" required  hidden>
<br>
</p>
</form>


## api/v1/users/{user}




> Example request:

```bash
curl -X DELETE \
    "http://MammaSend.test/api/v1/users/eos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/users/eos"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-v1-users--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-users--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-users--user-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-users--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-users--user-"></code></pre>
</div>
<form id="form-DELETEapi-v1-users--user-" data-method="DELETE" data-path="api/v1/users/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-users--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-users--user-" onclick="tryItOut('DELETEapi-v1-users--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-users--user-" onclick="cancelTryOut('DELETEapi-v1-users--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-users--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/users/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="DELETEapi-v1-users--user-" data-component="url" required  hidden>
<br>
</p>
</form>


## api/v1/addresses




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/api/v1/addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/addresses"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-addresses" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-addresses"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-addresses"></code></pre>
</div>
<div id="execution-error-GETapi-v1-addresses" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-addresses"></code></pre>
</div>
<form id="form-GETapi-v1-addresses" data-method="GET" data-path="api/v1/addresses" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-addresses', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-addresses" onclick="tryItOut('GETapi-v1-addresses');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-addresses" onclick="cancelTryOut('GETapi-v1-addresses');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-addresses" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/addresses</code></b>
</p>
</form>


## api/v1/addresses




> Example request:

```bash
curl -X POST \
    "http://MammaSend.test/api/v1/addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"street":"illo","city":"aliquid","state":"non","zip_code":"soluta"}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/addresses"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "street": "illo",
    "city": "aliquid",
    "state": "non",
    "zip_code": "soluta"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-addresses" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-addresses"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-addresses"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-addresses" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-addresses"></code></pre>
</div>
<form id="form-POSTapi-v1-addresses" data-method="POST" data-path="api/v1/addresses" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-addresses', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-addresses" onclick="tryItOut('POSTapi-v1-addresses');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-addresses" onclick="cancelTryOut('POSTapi-v1-addresses');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-addresses" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/addresses</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>street</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="street" data-endpoint="POSTapi-v1-addresses" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>city</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="city" data-endpoint="POSTapi-v1-addresses" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>state</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="state" data-endpoint="POSTapi-v1-addresses" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>zip_code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="zip_code" data-endpoint="POSTapi-v1-addresses" data-component="body" required  hidden>
<br>
</p>

</form>


## api/v1/addresses/{address}




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/api/v1/addresses/aperiam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/addresses/aperiam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-addresses--address-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-addresses--address-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-addresses--address-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-addresses--address-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-addresses--address-"></code></pre>
</div>
<form id="form-GETapi-v1-addresses--address-" data-method="GET" data-path="api/v1/addresses/{address}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-addresses--address-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-addresses--address-" onclick="tryItOut('GETapi-v1-addresses--address-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-addresses--address-" onclick="cancelTryOut('GETapi-v1-addresses--address-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-addresses--address-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/addresses/{address}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address" data-endpoint="GETapi-v1-addresses--address-" data-component="url" required  hidden>
<br>
</p>
</form>


## api/v1/addresses/{address}




> Example request:

```bash
curl -X PUT \
    "http://MammaSend.test/api/v1/addresses/rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"street":"omnis","city":"voluptatem","state":"quae","zip_code":"repellat"}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/addresses/rerum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "street": "omnis",
    "city": "voluptatem",
    "state": "quae",
    "zip_code": "repellat"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-v1-addresses--address-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-addresses--address-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-addresses--address-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-addresses--address-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-addresses--address-"></code></pre>
</div>
<form id="form-PUTapi-v1-addresses--address-" data-method="PUT" data-path="api/v1/addresses/{address}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-addresses--address-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-addresses--address-" onclick="tryItOut('PUTapi-v1-addresses--address-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-addresses--address-" onclick="cancelTryOut('PUTapi-v1-addresses--address-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-addresses--address-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/addresses/{address}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/v1/addresses/{address}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address" data-endpoint="PUTapi-v1-addresses--address-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>street</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="street" data-endpoint="PUTapi-v1-addresses--address-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>city</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="city" data-endpoint="PUTapi-v1-addresses--address-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>state</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="state" data-endpoint="PUTapi-v1-addresses--address-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>zip_code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="zip_code" data-endpoint="PUTapi-v1-addresses--address-" data-component="body" required  hidden>
<br>
</p>

</form>


## api/v1/addresses/{address}




> Example request:

```bash
curl -X DELETE \
    "http://MammaSend.test/api/v1/addresses/voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/addresses/voluptatem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-v1-addresses--address-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-addresses--address-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-addresses--address-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-addresses--address-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-addresses--address-"></code></pre>
</div>
<form id="form-DELETEapi-v1-addresses--address-" data-method="DELETE" data-path="api/v1/addresses/{address}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-addresses--address-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-addresses--address-" onclick="tryItOut('DELETEapi-v1-addresses--address-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-addresses--address-" onclick="cancelTryOut('DELETEapi-v1-addresses--address-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-addresses--address-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/addresses/{address}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address" data-endpoint="DELETEapi-v1-addresses--address-" data-component="url" required  hidden>
<br>
</p>
</form>


## api/v1/rides




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/api/v1/rides" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/rides"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-rides" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-rides"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-rides"></code></pre>
</div>
<div id="execution-error-GETapi-v1-rides" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-rides"></code></pre>
</div>
<form id="form-GETapi-v1-rides" data-method="GET" data-path="api/v1/rides" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-rides', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-rides" onclick="tryItOut('GETapi-v1-rides');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-rides" onclick="cancelTryOut('GETapi-v1-rides');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-rides" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/rides</code></b>
</p>
</form>


## api/v1/rides




> Example request:

```bash
curl -X POST \
    "http://MammaSend.test/api/v1/rides" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"rider_id":15}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/rides"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "rider_id": 15
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-rides" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-rides"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-rides"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-rides" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-rides"></code></pre>
</div>
<form id="form-POSTapi-v1-rides" data-method="POST" data-path="api/v1/rides" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-rides', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-rides" onclick="tryItOut('POSTapi-v1-rides');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-rides" onclick="cancelTryOut('POSTapi-v1-rides');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-rides" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/rides</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>rider_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="rider_id" data-endpoint="POSTapi-v1-rides" data-component="body" required  hidden>
<br>
</p>

</form>


## api/v1/rides/{ride}




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/api/v1/rides/quaerat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/rides/quaerat"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-rides--ride-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-rides--ride-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-rides--ride-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-rides--ride-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-rides--ride-"></code></pre>
</div>
<form id="form-GETapi-v1-rides--ride-" data-method="GET" data-path="api/v1/rides/{ride}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-rides--ride-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-rides--ride-" onclick="tryItOut('GETapi-v1-rides--ride-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-rides--ride-" onclick="cancelTryOut('GETapi-v1-rides--ride-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-rides--ride-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/rides/{ride}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>ride</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ride" data-endpoint="GETapi-v1-rides--ride-" data-component="url" required  hidden>
<br>
</p>
</form>


## api/v1/rides/{ride}




> Example request:

```bash
curl -X PUT \
    "http://MammaSend.test/api/v1/rides/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"rider_id":4}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/rides/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "rider_id": 4
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-v1-rides--ride-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-rides--ride-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-rides--ride-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-rides--ride-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-rides--ride-"></code></pre>
</div>
<form id="form-PUTapi-v1-rides--ride-" data-method="PUT" data-path="api/v1/rides/{ride}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-rides--ride-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-rides--ride-" onclick="tryItOut('PUTapi-v1-rides--ride-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-rides--ride-" onclick="cancelTryOut('PUTapi-v1-rides--ride-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-rides--ride-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/rides/{ride}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/v1/rides/{ride}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>ride</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ride" data-endpoint="PUTapi-v1-rides--ride-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>rider_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="rider_id" data-endpoint="PUTapi-v1-rides--ride-" data-component="body" required  hidden>
<br>
</p>

</form>


## api/v1/rides/{ride}




> Example request:

```bash
curl -X DELETE \
    "http://MammaSend.test/api/v1/rides/ex" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/rides/ex"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-v1-rides--ride-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-rides--ride-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-rides--ride-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-rides--ride-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-rides--ride-"></code></pre>
</div>
<form id="form-DELETEapi-v1-rides--ride-" data-method="DELETE" data-path="api/v1/rides/{ride}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-rides--ride-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-rides--ride-" onclick="tryItOut('DELETEapi-v1-rides--ride-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-rides--ride-" onclick="cancelTryOut('DELETEapi-v1-rides--ride-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-rides--ride-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/rides/{ride}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>ride</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ride" data-endpoint="DELETEapi-v1-rides--ride-" data-component="url" required  hidden>
<br>
</p>
</form>


## api/v1/payments




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/api/v1/payments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/payments"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-payments" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-payments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-payments"></code></pre>
</div>
<div id="execution-error-GETapi-v1-payments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-payments"></code></pre>
</div>
<form id="form-GETapi-v1-payments" data-method="GET" data-path="api/v1/payments" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-payments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-payments" onclick="tryItOut('GETapi-v1-payments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-payments" onclick="cancelTryOut('GETapi-v1-payments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-payments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/payments</code></b>
</p>
</form>


## api/v1/payments




> Example request:

```bash
curl -X POST \
    "http://MammaSend.test/api/v1/payments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"total_received":"magni","rider_received":"inventore","office_received":"et","user_id":6}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/payments"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "total_received": "magni",
    "rider_received": "inventore",
    "office_received": "et",
    "user_id": 6
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-payments" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-payments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-payments"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-payments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-payments"></code></pre>
</div>
<form id="form-POSTapi-v1-payments" data-method="POST" data-path="api/v1/payments" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-payments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-payments" onclick="tryItOut('POSTapi-v1-payments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-payments" onclick="cancelTryOut('POSTapi-v1-payments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-payments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/payments</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>total_received</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="total_received" data-endpoint="POSTapi-v1-payments" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>rider_received</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="rider_received" data-endpoint="POSTapi-v1-payments" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>office_received</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="office_received" data-endpoint="POSTapi-v1-payments" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="POSTapi-v1-payments" data-component="body" required  hidden>
<br>
</p>

</form>


## api/v1/payments/{payment}




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/api/v1/payments/inventore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/payments/inventore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-payments--payment-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-payments--payment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-payments--payment-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-payments--payment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-payments--payment-"></code></pre>
</div>
<form id="form-GETapi-v1-payments--payment-" data-method="GET" data-path="api/v1/payments/{payment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-payments--payment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-payments--payment-" onclick="tryItOut('GETapi-v1-payments--payment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-payments--payment-" onclick="cancelTryOut('GETapi-v1-payments--payment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-payments--payment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/payments/{payment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>payment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="payment" data-endpoint="GETapi-v1-payments--payment-" data-component="url" required  hidden>
<br>
</p>
</form>


## api/v1/payments/{payment}




> Example request:

```bash
curl -X PUT \
    "http://MammaSend.test/api/v1/payments/vel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"total_received":"minima","rider_received":"voluptatum","office_received":"qui","user_id":17}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/payments/vel"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "total_received": "minima",
    "rider_received": "voluptatum",
    "office_received": "qui",
    "user_id": 17
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-v1-payments--payment-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-payments--payment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-payments--payment-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-payments--payment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-payments--payment-"></code></pre>
</div>
<form id="form-PUTapi-v1-payments--payment-" data-method="PUT" data-path="api/v1/payments/{payment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-payments--payment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-payments--payment-" onclick="tryItOut('PUTapi-v1-payments--payment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-payments--payment-" onclick="cancelTryOut('PUTapi-v1-payments--payment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-payments--payment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/payments/{payment}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/v1/payments/{payment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>payment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="payment" data-endpoint="PUTapi-v1-payments--payment-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>total_received</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="total_received" data-endpoint="PUTapi-v1-payments--payment-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>rider_received</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="rider_received" data-endpoint="PUTapi-v1-payments--payment-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>office_received</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="office_received" data-endpoint="PUTapi-v1-payments--payment-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="PUTapi-v1-payments--payment-" data-component="body" required  hidden>
<br>
</p>

</form>


## api/v1/payments/{payment}




> Example request:

```bash
curl -X DELETE \
    "http://MammaSend.test/api/v1/payments/totam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/payments/totam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-v1-payments--payment-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-payments--payment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-payments--payment-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-payments--payment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-payments--payment-"></code></pre>
</div>
<form id="form-DELETEapi-v1-payments--payment-" data-method="DELETE" data-path="api/v1/payments/{payment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-payments--payment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-payments--payment-" onclick="tryItOut('DELETEapi-v1-payments--payment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-payments--payment-" onclick="cancelTryOut('DELETEapi-v1-payments--payment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-payments--payment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/payments/{payment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>payment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="payment" data-endpoint="DELETEapi-v1-payments--payment-" data-component="url" required  hidden>
<br>
</p>
</form>


## api/v1/faq-categories




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/api/v1/faq-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/faq-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-faq-categories" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-faq-categories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-faq-categories"></code></pre>
</div>
<div id="execution-error-GETapi-v1-faq-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-faq-categories"></code></pre>
</div>
<form id="form-GETapi-v1-faq-categories" data-method="GET" data-path="api/v1/faq-categories" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-faq-categories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-faq-categories" onclick="tryItOut('GETapi-v1-faq-categories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-faq-categories" onclick="cancelTryOut('GETapi-v1-faq-categories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-faq-categories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/faq-categories</code></b>
</p>
</form>


## api/v1/faq-categories




> Example request:

```bash
curl -X POST \
    "http://MammaSend.test/api/v1/faq-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category":"id"}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/faq-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category": "id"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-faq-categories" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-faq-categories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-faq-categories"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-faq-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-faq-categories"></code></pre>
</div>
<form id="form-POSTapi-v1-faq-categories" data-method="POST" data-path="api/v1/faq-categories" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-faq-categories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-faq-categories" onclick="tryItOut('POSTapi-v1-faq-categories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-faq-categories" onclick="cancelTryOut('POSTapi-v1-faq-categories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-faq-categories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/faq-categories</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category" data-endpoint="POSTapi-v1-faq-categories" data-component="body" required  hidden>
<br>
</p>

</form>


## api/v1/faq-categories/{faq_category}




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/api/v1/faq-categories/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/faq-categories/est"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-faq-categories--faq_category-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-faq-categories--faq_category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-faq-categories--faq_category-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-faq-categories--faq_category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-faq-categories--faq_category-"></code></pre>
</div>
<form id="form-GETapi-v1-faq-categories--faq_category-" data-method="GET" data-path="api/v1/faq-categories/{faq_category}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-faq-categories--faq_category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-faq-categories--faq_category-" onclick="tryItOut('GETapi-v1-faq-categories--faq_category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-faq-categories--faq_category-" onclick="cancelTryOut('GETapi-v1-faq-categories--faq_category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-faq-categories--faq_category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/faq-categories/{faq_category}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>faq_category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="faq_category" data-endpoint="GETapi-v1-faq-categories--faq_category-" data-component="url" required  hidden>
<br>
</p>
</form>


## api/v1/faq-categories/{faq_category}




> Example request:

```bash
curl -X PUT \
    "http://MammaSend.test/api/v1/faq-categories/blanditiis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category":"sit"}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/faq-categories/blanditiis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category": "sit"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-v1-faq-categories--faq_category-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-faq-categories--faq_category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-faq-categories--faq_category-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-faq-categories--faq_category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-faq-categories--faq_category-"></code></pre>
</div>
<form id="form-PUTapi-v1-faq-categories--faq_category-" data-method="PUT" data-path="api/v1/faq-categories/{faq_category}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-faq-categories--faq_category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-faq-categories--faq_category-" onclick="tryItOut('PUTapi-v1-faq-categories--faq_category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-faq-categories--faq_category-" onclick="cancelTryOut('PUTapi-v1-faq-categories--faq_category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-faq-categories--faq_category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/faq-categories/{faq_category}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/v1/faq-categories/{faq_category}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>faq_category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="faq_category" data-endpoint="PUTapi-v1-faq-categories--faq_category-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category" data-endpoint="PUTapi-v1-faq-categories--faq_category-" data-component="body" required  hidden>
<br>
</p>

</form>


## api/v1/faq-categories/{faq_category}




> Example request:

```bash
curl -X DELETE \
    "http://MammaSend.test/api/v1/faq-categories/aliquid" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/faq-categories/aliquid"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-v1-faq-categories--faq_category-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-faq-categories--faq_category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-faq-categories--faq_category-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-faq-categories--faq_category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-faq-categories--faq_category-"></code></pre>
</div>
<form id="form-DELETEapi-v1-faq-categories--faq_category-" data-method="DELETE" data-path="api/v1/faq-categories/{faq_category}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-faq-categories--faq_category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-faq-categories--faq_category-" onclick="tryItOut('DELETEapi-v1-faq-categories--faq_category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-faq-categories--faq_category-" onclick="cancelTryOut('DELETEapi-v1-faq-categories--faq_category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-faq-categories--faq_category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/faq-categories/{faq_category}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>faq_category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="faq_category" data-endpoint="DELETEapi-v1-faq-categories--faq_category-" data-component="url" required  hidden>
<br>
</p>
</form>


## api/v1/faq-questions




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/api/v1/faq-questions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/faq-questions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-faq-questions" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-faq-questions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-faq-questions"></code></pre>
</div>
<div id="execution-error-GETapi-v1-faq-questions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-faq-questions"></code></pre>
</div>
<form id="form-GETapi-v1-faq-questions" data-method="GET" data-path="api/v1/faq-questions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-faq-questions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-faq-questions" onclick="tryItOut('GETapi-v1-faq-questions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-faq-questions" onclick="cancelTryOut('GETapi-v1-faq-questions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-faq-questions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/faq-questions</code></b>
</p>
</form>


## api/v1/faq-questions




> Example request:

```bash
curl -X POST \
    "http://MammaSend.test/api/v1/faq-questions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category_id":3,"question":"unde","answer":"non"}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/faq-questions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_id": 3,
    "question": "unde",
    "answer": "non"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-faq-questions" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-faq-questions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-faq-questions"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-faq-questions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-faq-questions"></code></pre>
</div>
<form id="form-POSTapi-v1-faq-questions" data-method="POST" data-path="api/v1/faq-questions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-faq-questions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-faq-questions" onclick="tryItOut('POSTapi-v1-faq-questions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-faq-questions" onclick="cancelTryOut('POSTapi-v1-faq-questions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-faq-questions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/faq-questions</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>category_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="category_id" data-endpoint="POSTapi-v1-faq-questions" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>question</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="question" data-endpoint="POSTapi-v1-faq-questions" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>answer</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="answer" data-endpoint="POSTapi-v1-faq-questions" data-component="body" required  hidden>
<br>
</p>

</form>


## api/v1/faq-questions/{faq_question}




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/api/v1/faq-questions/architecto" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/faq-questions/architecto"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-faq-questions--faq_question-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-faq-questions--faq_question-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-faq-questions--faq_question-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-faq-questions--faq_question-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-faq-questions--faq_question-"></code></pre>
</div>
<form id="form-GETapi-v1-faq-questions--faq_question-" data-method="GET" data-path="api/v1/faq-questions/{faq_question}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-faq-questions--faq_question-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-faq-questions--faq_question-" onclick="tryItOut('GETapi-v1-faq-questions--faq_question-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-faq-questions--faq_question-" onclick="cancelTryOut('GETapi-v1-faq-questions--faq_question-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-faq-questions--faq_question-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/faq-questions/{faq_question}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>faq_question</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="faq_question" data-endpoint="GETapi-v1-faq-questions--faq_question-" data-component="url" required  hidden>
<br>
</p>
</form>


## api/v1/faq-questions/{faq_question}




> Example request:

```bash
curl -X PUT \
    "http://MammaSend.test/api/v1/faq-questions/mollitia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category_id":16,"question":"sint","answer":"consectetur"}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/faq-questions/mollitia"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_id": 16,
    "question": "sint",
    "answer": "consectetur"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-v1-faq-questions--faq_question-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-faq-questions--faq_question-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-faq-questions--faq_question-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-faq-questions--faq_question-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-faq-questions--faq_question-"></code></pre>
</div>
<form id="form-PUTapi-v1-faq-questions--faq_question-" data-method="PUT" data-path="api/v1/faq-questions/{faq_question}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-faq-questions--faq_question-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-faq-questions--faq_question-" onclick="tryItOut('PUTapi-v1-faq-questions--faq_question-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-faq-questions--faq_question-" onclick="cancelTryOut('PUTapi-v1-faq-questions--faq_question-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-faq-questions--faq_question-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/faq-questions/{faq_question}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/v1/faq-questions/{faq_question}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>faq_question</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="faq_question" data-endpoint="PUTapi-v1-faq-questions--faq_question-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>category_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="category_id" data-endpoint="PUTapi-v1-faq-questions--faq_question-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>question</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="question" data-endpoint="PUTapi-v1-faq-questions--faq_question-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>answer</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="answer" data-endpoint="PUTapi-v1-faq-questions--faq_question-" data-component="body" required  hidden>
<br>
</p>

</form>


## api/v1/faq-questions/{faq_question}




> Example request:

```bash
curl -X DELETE \
    "http://MammaSend.test/api/v1/faq-questions/qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/api/v1/faq-questions/qui"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-v1-faq-questions--faq_question-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-faq-questions--faq_question-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-faq-questions--faq_question-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-faq-questions--faq_question-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-faq-questions--faq_question-"></code></pre>
</div>
<form id="form-DELETEapi-v1-faq-questions--faq_question-" data-method="DELETE" data-path="api/v1/faq-questions/{faq_question}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-faq-questions--faq_question-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-faq-questions--faq_question-" onclick="tryItOut('DELETEapi-v1-faq-questions--faq_question-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-faq-questions--faq_question-" onclick="cancelTryOut('DELETEapi-v1-faq-questions--faq_question-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-faq-questions--faq_question-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/faq-questions/{faq_question}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>faq_question</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="faq_question" data-endpoint="DELETEapi-v1-faq-questions--faq_question-" data-component="url" required  hidden>
<br>
</p>
</form>


## Invoke the controller method.




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='/login'" />

        <title>Redirecting to /login</title>
    </head>
    <body>
        Redirecting to <a href="/login">/login</a>.
    </body>
</html>
```
<div id="execution-results-GET-" hidden>
    <blockquote>Received response<span id="execution-response-status-GET-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET-"></code></pre>
</div>
<div id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-"></code></pre>
</div>
<form id="form-GET-" data-method="GET" data-path="/" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET-" onclick="tryItOut('GET-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET-" onclick="cancelTryOut('GET-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>/</code></b>
</p>
<p>
<small class="badge badge-black">POST</small>
 <b><code>/</code></b>
</p>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>/</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>/</code></b>
</p>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>/</code></b>
</p>
<p>
<small class="badge badge-grey">OPTIONS</small>
 <b><code>/</code></b>
</p>
</form>


## home




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/home"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://MammaSend.test/admin'" />

        <title>Redirecting to http://MammaSend.test/admin</title>
    </head>
    <body>
        Redirecting to <a href="http://MammaSend.test/admin">http://MammaSend.test/admin</a>.
    </body>
</html>
```
<div id="execution-results-GEThome" hidden>
    <blockquote>Received response<span id="execution-response-status-GEThome"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GEThome"></code></pre>
</div>
<div id="execution-error-GEThome" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GEThome"></code></pre>
</div>
<form id="form-GEThome" data-method="GET" data-path="home" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GEThome', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GEThome" onclick="tryItOut('GEThome');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GEThome" onclick="cancelTryOut('GEThome');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GEThome" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>home</code></b>
</p>
</form>


## Show the application&#039;s login form.




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="QxQMSxeL5NqkWi0obH8rhhOrkQMZ6nFbBPMKq7Zj">

    <title>MammaSend</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/@coreui/coreui@3.2/dist/css/coreui.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="http://MammaSend.test/css/custom.css" rel="stylesheet" />
    </head>

<body class="header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden login-page">
<div class="c-app flex-row align-items-center">
    <div class="container">
            <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mx-4">
                <div class="card-body p-4">
                    <h1>MammaSend</h1>

                    <p class="text-muted">Login</p>

                    
                    <form method="POST" action="http://MammaSend.test/login">
                        <input type="hidden" name="_token" value="QxQMSxeL5NqkWi0obH8rhhOrkQMZ6nFbBPMKq7Zj">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-user"></i>
                            </span>
                            </div>

                            <input id="email" name="email" type="text" class="form-control" required autocomplete="email" autofocus placeholder="Email" value="">

                                                    </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>

                            <input id="password" name="password" type="password" class="form-control" required placeholder="Password">

                                                    </div>

                        <div class="input-group mb-4">
                            <div class="form-check checkbox">
                                <input class="form-check-input" name="remember" type="checkbox" id="remember" style="vertical-align: middle;" />
                                <label class="form-check-label" for="remember" style="vertical-align: middle;">
                                    Remember me
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary px-4">
                                    Login
                                </button>
                            </div>
                            <div class="col-6 text-right">
                                                                    <a class="btn btn-link px-0" href="http://MammaSend.test/password/reset">
                                        Forgot your password?
                                    </a><br>
                                                                <a class="btn btn-link px-0" href="http://MammaSend.test/register">
                                    Register
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</body>

</html>

```
<div id="execution-results-GETlogin" hidden>
    <blockquote>Received response<span id="execution-response-status-GETlogin"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETlogin"></code></pre>
</div>
<div id="execution-error-GETlogin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETlogin"></code></pre>
</div>
<form id="form-GETlogin" data-method="GET" data-path="login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETlogin', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETlogin" onclick="tryItOut('GETlogin');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETlogin" onclick="cancelTryOut('GETlogin');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETlogin" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>login</code></b>
</p>
</form>


## Handle a login request to the application.




> Example request:

```bash
curl -X POST \
    "http://MammaSend.test/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTlogin" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTlogin"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTlogin"></code></pre>
</div>
<div id="execution-error-POSTlogin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTlogin"></code></pre>
</div>
<form id="form-POSTlogin" data-method="POST" data-path="login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTlogin', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTlogin" onclick="tryItOut('POSTlogin');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTlogin" onclick="cancelTryOut('POSTlogin');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTlogin" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>login</code></b>
</p>
</form>


## Log the user out of the application.




> Example request:

```bash
curl -X POST \
    "http://MammaSend.test/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTlogout" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTlogout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTlogout"></code></pre>
</div>
<div id="execution-error-POSTlogout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTlogout"></code></pre>
</div>
<form id="form-POSTlogout" data-method="POST" data-path="logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTlogout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTlogout" onclick="tryItOut('POSTlogout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTlogout" onclick="cancelTryOut('POSTlogout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTlogout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>logout</code></b>
</p>
</form>


## Show the application registration form.




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="QxQMSxeL5NqkWi0obH8rhhOrkQMZ6nFbBPMKq7Zj">

    <title>MammaSend</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/@coreui/coreui@3.2/dist/css/coreui.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="http://MammaSend.test/css/custom.css" rel="stylesheet" />
    </head>

<body class="header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden login-page">
<div class="c-app flex-row align-items-center">
    <div class="container">
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register</div>

                <div class="card-body">
                    <form method="POST" action="http://MammaSend.test/register">
                        <input type="hidden" name="_token" value="QxQMSxeL5NqkWi0obH8rhhOrkQMZ6nFbBPMKq7Zj">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="name" value="" required autocomplete="name" autofocus>

                                                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email">

                                                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control " name="password" required autocomplete="new-password">

                                                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
</body>

</html>

```
<div id="execution-results-GETregister" hidden>
    <blockquote>Received response<span id="execution-response-status-GETregister"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETregister"></code></pre>
</div>
<div id="execution-error-GETregister" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETregister"></code></pre>
</div>
<form id="form-GETregister" data-method="GET" data-path="register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETregister', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETregister" onclick="tryItOut('GETregister');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETregister" onclick="cancelTryOut('GETregister');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETregister" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>register</code></b>
</p>
</form>


## Handle a registration request for the application.




> Example request:

```bash
curl -X POST \
    "http://MammaSend.test/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTregister" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTregister"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTregister"></code></pre>
</div>
<div id="execution-error-POSTregister" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTregister"></code></pre>
</div>
<form id="form-POSTregister" data-method="POST" data-path="register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTregister', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTregister" onclick="tryItOut('POSTregister');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTregister" onclick="cancelTryOut('POSTregister');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTregister" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>register</code></b>
</p>
</form>


## Display the form to request a password reset link.




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="QxQMSxeL5NqkWi0obH8rhhOrkQMZ6nFbBPMKq7Zj">

    <title>MammaSend</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/@coreui/coreui@3.2/dist/css/coreui.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="http://MammaSend.test/css/custom.css" rel="stylesheet" />
    </head>

<body class="header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden login-page">
<div class="c-app flex-row align-items-center">
    <div class="container">
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Reset Password</div>

                <div class="card-body">
                    
                    <form method="POST" action="http://MammaSend.test/password/email">
                        <input type="hidden" name="_token" value="QxQMSxeL5NqkWi0obH8rhhOrkQMZ6nFbBPMKq7Zj">
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email" autofocus>

                                                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
</body>

</html>

```
<div id="execution-results-GETpassword-reset" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpassword-reset"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpassword-reset"></code></pre>
</div>
<div id="execution-error-GETpassword-reset" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpassword-reset"></code></pre>
</div>
<form id="form-GETpassword-reset" data-method="GET" data-path="password/reset" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpassword-reset', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpassword-reset" onclick="tryItOut('GETpassword-reset');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpassword-reset" onclick="cancelTryOut('GETpassword-reset');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpassword-reset" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>password/reset</code></b>
</p>
</form>


## Send a reset link to the given user.




> Example request:

```bash
curl -X POST \
    "http://MammaSend.test/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTpassword-email" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpassword-email"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpassword-email"></code></pre>
</div>
<div id="execution-error-POSTpassword-email" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpassword-email"></code></pre>
</div>
<form id="form-POSTpassword-email" data-method="POST" data-path="password/email" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpassword-email', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpassword-email" onclick="tryItOut('POSTpassword-email');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpassword-email" onclick="cancelTryOut('POSTpassword-email');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpassword-email" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>password/email</code></b>
</p>
</form>


## Display the password reset view for the given token.


If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/password/reset/ea" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/password/reset/ea"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="QxQMSxeL5NqkWi0obH8rhhOrkQMZ6nFbBPMKq7Zj">

    <title>MammaSend</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/@coreui/coreui@3.2/dist/css/coreui.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="http://MammaSend.test/css/custom.css" rel="stylesheet" />
    </head>

<body class="header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden login-page">
<div class="c-app flex-row align-items-center">
    <div class="container">
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Reset Password</div>

                <div class="card-body">
                    <form method="POST" action="http://MammaSend.test/password/reset">
                        <input type="hidden" name="_token" value="QxQMSxeL5NqkWi0obH8rhhOrkQMZ6nFbBPMKq7Zj">
                        <input type="hidden" name="token" value="ea">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email" autofocus>

                                                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control " name="password" required autocomplete="new-password">

                                                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
</body>

</html>

```
<div id="execution-results-GETpassword-reset--token-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpassword-reset--token-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpassword-reset--token-"></code></pre>
</div>
<div id="execution-error-GETpassword-reset--token-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpassword-reset--token-"></code></pre>
</div>
<form id="form-GETpassword-reset--token-" data-method="GET" data-path="password/reset/{token}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpassword-reset--token-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpassword-reset--token-" onclick="tryItOut('GETpassword-reset--token-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpassword-reset--token-" onclick="cancelTryOut('GETpassword-reset--token-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpassword-reset--token-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>password/reset/{token}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="token" data-endpoint="GETpassword-reset--token-" data-component="url" required  hidden>
<br>
</p>
</form>


## Reset the given user&#039;s password.




> Example request:

```bash
curl -X POST \
    "http://MammaSend.test/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTpassword-reset" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpassword-reset"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpassword-reset"></code></pre>
</div>
<div id="execution-error-POSTpassword-reset" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpassword-reset"></code></pre>
</div>
<form id="form-POSTpassword-reset" data-method="POST" data-path="password/reset" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpassword-reset', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpassword-reset" onclick="tryItOut('POSTpassword-reset');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpassword-reset" onclick="cancelTryOut('POSTpassword-reset');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpassword-reset" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>password/reset</code></b>
</p>
</form>


## Display the password confirmation view.




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpassword-confirm" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpassword-confirm"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpassword-confirm"></code></pre>
</div>
<div id="execution-error-GETpassword-confirm" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpassword-confirm"></code></pre>
</div>
<form id="form-GETpassword-confirm" data-method="GET" data-path="password/confirm" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpassword-confirm', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpassword-confirm" onclick="tryItOut('GETpassword-confirm');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpassword-confirm" onclick="cancelTryOut('GETpassword-confirm');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpassword-confirm" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>password/confirm</code></b>
</p>
</form>


## Confirm the given user&#039;s password.




> Example request:

```bash
curl -X POST \
    "http://MammaSend.test/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTpassword-confirm" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpassword-confirm"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpassword-confirm"></code></pre>
</div>
<div id="execution-error-POSTpassword-confirm" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpassword-confirm"></code></pre>
</div>
<form id="form-POSTpassword-confirm" data-method="POST" data-path="password/confirm" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpassword-confirm', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpassword-confirm" onclick="tryItOut('POSTpassword-confirm');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpassword-confirm" onclick="cancelTryOut('POSTpassword-confirm');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpassword-confirm" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>password/confirm</code></b>
</p>
</form>


## Show the application dashboard.




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin"></code></pre>
</div>
<div id="execution-error-GETadmin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin"></code></pre>
</div>
<form id="form-GETadmin" data-method="GET" data-path="admin" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin" onclick="tryItOut('GETadmin');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin" onclick="cancelTryOut('GETadmin');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin</code></b>
</p>
</form>


## admin/permissions




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/permissions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/permissions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-permissions" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-permissions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-permissions"></code></pre>
</div>
<div id="execution-error-GETadmin-permissions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-permissions"></code></pre>
</div>
<form id="form-GETadmin-permissions" data-method="GET" data-path="admin/permissions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-permissions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-permissions" onclick="tryItOut('GETadmin-permissions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-permissions" onclick="cancelTryOut('GETadmin-permissions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-permissions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/permissions</code></b>
</p>
</form>


## admin/permissions/create




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/permissions/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/permissions/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-permissions-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-permissions-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-permissions-create"></code></pre>
</div>
<div id="execution-error-GETadmin-permissions-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-permissions-create"></code></pre>
</div>
<form id="form-GETadmin-permissions-create" data-method="GET" data-path="admin/permissions/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-permissions-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-permissions-create" onclick="tryItOut('GETadmin-permissions-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-permissions-create" onclick="cancelTryOut('GETadmin-permissions-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-permissions-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/permissions/create</code></b>
</p>
</form>


## admin/permissions




> Example request:

```bash
curl -X POST \
    "http://MammaSend.test/admin/permissions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"suscipit"}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/permissions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "suscipit"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-permissions" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-permissions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-permissions"></code></pre>
</div>
<div id="execution-error-POSTadmin-permissions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-permissions"></code></pre>
</div>
<form id="form-POSTadmin-permissions" data-method="POST" data-path="admin/permissions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-permissions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-permissions" onclick="tryItOut('POSTadmin-permissions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-permissions" onclick="cancelTryOut('POSTadmin-permissions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-permissions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/permissions</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTadmin-permissions" data-component="body" required  hidden>
<br>
</p>

</form>


## admin/permissions/{permission}




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/permissions/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/permissions/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-permissions--permission-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-permissions--permission-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-permissions--permission-"></code></pre>
</div>
<div id="execution-error-GETadmin-permissions--permission-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-permissions--permission-"></code></pre>
</div>
<form id="form-GETadmin-permissions--permission-" data-method="GET" data-path="admin/permissions/{permission}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-permissions--permission-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-permissions--permission-" onclick="tryItOut('GETadmin-permissions--permission-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-permissions--permission-" onclick="cancelTryOut('GETadmin-permissions--permission-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-permissions--permission-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/permissions/{permission}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>permission</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="permission" data-endpoint="GETadmin-permissions--permission-" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/permissions/{permission}/edit




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/permissions/voluptas/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/permissions/voluptas/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-permissions--permission--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-permissions--permission--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-permissions--permission--edit"></code></pre>
</div>
<div id="execution-error-GETadmin-permissions--permission--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-permissions--permission--edit"></code></pre>
</div>
<form id="form-GETadmin-permissions--permission--edit" data-method="GET" data-path="admin/permissions/{permission}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-permissions--permission--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-permissions--permission--edit" onclick="tryItOut('GETadmin-permissions--permission--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-permissions--permission--edit" onclick="cancelTryOut('GETadmin-permissions--permission--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-permissions--permission--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/permissions/{permission}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>permission</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="permission" data-endpoint="GETadmin-permissions--permission--edit" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/permissions/{permission}




> Example request:

```bash
curl -X PUT \
    "http://MammaSend.test/admin/permissions/nihil" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"qui"}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/permissions/nihil"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "qui"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTadmin-permissions--permission-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTadmin-permissions--permission-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTadmin-permissions--permission-"></code></pre>
</div>
<div id="execution-error-PUTadmin-permissions--permission-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTadmin-permissions--permission-"></code></pre>
</div>
<form id="form-PUTadmin-permissions--permission-" data-method="PUT" data-path="admin/permissions/{permission}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTadmin-permissions--permission-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTadmin-permissions--permission-" onclick="tryItOut('PUTadmin-permissions--permission-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTadmin-permissions--permission-" onclick="cancelTryOut('PUTadmin-permissions--permission-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTadmin-permissions--permission-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>admin/permissions/{permission}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>admin/permissions/{permission}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>permission</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="permission" data-endpoint="PUTadmin-permissions--permission-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="PUTadmin-permissions--permission-" data-component="body" required  hidden>
<br>
</p>

</form>


## admin/permissions/{permission}




> Example request:

```bash
curl -X DELETE \
    "http://MammaSend.test/admin/permissions/non" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/permissions/non"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEadmin-permissions--permission-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEadmin-permissions--permission-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEadmin-permissions--permission-"></code></pre>
</div>
<div id="execution-error-DELETEadmin-permissions--permission-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEadmin-permissions--permission-"></code></pre>
</div>
<form id="form-DELETEadmin-permissions--permission-" data-method="DELETE" data-path="admin/permissions/{permission}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEadmin-permissions--permission-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEadmin-permissions--permission-" onclick="tryItOut('DELETEadmin-permissions--permission-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEadmin-permissions--permission-" onclick="cancelTryOut('DELETEadmin-permissions--permission-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEadmin-permissions--permission-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>admin/permissions/{permission}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>permission</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="permission" data-endpoint="DELETEadmin-permissions--permission-" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/roles




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-roles" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-roles"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-roles"></code></pre>
</div>
<div id="execution-error-GETadmin-roles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-roles"></code></pre>
</div>
<form id="form-GETadmin-roles" data-method="GET" data-path="admin/roles" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-roles', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-roles" onclick="tryItOut('GETadmin-roles');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-roles" onclick="cancelTryOut('GETadmin-roles');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-roles" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/roles</code></b>
</p>
</form>


## admin/roles/create




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/roles/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/roles/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-roles-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-roles-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-roles-create"></code></pre>
</div>
<div id="execution-error-GETadmin-roles-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-roles-create"></code></pre>
</div>
<form id="form-GETadmin-roles-create" data-method="GET" data-path="admin/roles/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-roles-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-roles-create" onclick="tryItOut('GETadmin-roles-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-roles-create" onclick="cancelTryOut('GETadmin-roles-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-roles-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/roles/create</code></b>
</p>
</form>


## admin/roles




> Example request:

```bash
curl -X POST \
    "http://MammaSend.test/admin/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"voluptates","permissions":[8,8]}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "voluptates",
    "permissions": [
        8,
        8
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-roles" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-roles"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-roles"></code></pre>
</div>
<div id="execution-error-POSTadmin-roles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-roles"></code></pre>
</div>
<form id="form-POSTadmin-roles" data-method="POST" data-path="admin/roles" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-roles', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-roles" onclick="tryItOut('POSTadmin-roles');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-roles" onclick="cancelTryOut('POSTadmin-roles');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-roles" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/roles</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTadmin-roles" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>permissions</code></b>&nbsp;&nbsp;<small>integer[]</small>     <i>optional</i> &nbsp;
<input type="number" name="permissions.0" data-endpoint="POSTadmin-roles" data-component="body"  hidden>
<input type="number" name="permissions.1" data-endpoint="POSTadmin-roles" data-component="body" hidden>
<br>
</p>

</form>


## admin/roles/{role}




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/roles/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/roles/est"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-roles--role-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-roles--role-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-roles--role-"></code></pre>
</div>
<div id="execution-error-GETadmin-roles--role-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-roles--role-"></code></pre>
</div>
<form id="form-GETadmin-roles--role-" data-method="GET" data-path="admin/roles/{role}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-roles--role-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-roles--role-" onclick="tryItOut('GETadmin-roles--role-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-roles--role-" onclick="cancelTryOut('GETadmin-roles--role-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-roles--role-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/roles/{role}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>role</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="role" data-endpoint="GETadmin-roles--role-" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/roles/{role}/edit




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/roles/et/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/roles/et/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-roles--role--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-roles--role--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-roles--role--edit"></code></pre>
</div>
<div id="execution-error-GETadmin-roles--role--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-roles--role--edit"></code></pre>
</div>
<form id="form-GETadmin-roles--role--edit" data-method="GET" data-path="admin/roles/{role}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-roles--role--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-roles--role--edit" onclick="tryItOut('GETadmin-roles--role--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-roles--role--edit" onclick="cancelTryOut('GETadmin-roles--role--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-roles--role--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/roles/{role}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>role</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="role" data-endpoint="GETadmin-roles--role--edit" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/roles/{role}




> Example request:

```bash
curl -X PUT \
    "http://MammaSend.test/admin/roles/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"molestiae","permissions":[1,3]}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/roles/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "molestiae",
    "permissions": [
        1,
        3
    ]
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTadmin-roles--role-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTadmin-roles--role-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTadmin-roles--role-"></code></pre>
</div>
<div id="execution-error-PUTadmin-roles--role-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTadmin-roles--role-"></code></pre>
</div>
<form id="form-PUTadmin-roles--role-" data-method="PUT" data-path="admin/roles/{role}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTadmin-roles--role-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTadmin-roles--role-" onclick="tryItOut('PUTadmin-roles--role-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTadmin-roles--role-" onclick="cancelTryOut('PUTadmin-roles--role-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTadmin-roles--role-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>admin/roles/{role}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>admin/roles/{role}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>role</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="role" data-endpoint="PUTadmin-roles--role-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="PUTadmin-roles--role-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>permissions</code></b>&nbsp;&nbsp;<small>integer[]</small>     <i>optional</i> &nbsp;
<input type="number" name="permissions.0" data-endpoint="PUTadmin-roles--role-" data-component="body"  hidden>
<input type="number" name="permissions.1" data-endpoint="PUTadmin-roles--role-" data-component="body" hidden>
<br>
</p>

</form>


## admin/roles/{role}




> Example request:

```bash
curl -X DELETE \
    "http://MammaSend.test/admin/roles/tenetur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/roles/tenetur"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEadmin-roles--role-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEadmin-roles--role-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEadmin-roles--role-"></code></pre>
</div>
<div id="execution-error-DELETEadmin-roles--role-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEadmin-roles--role-"></code></pre>
</div>
<form id="form-DELETEadmin-roles--role-" data-method="DELETE" data-path="admin/roles/{role}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEadmin-roles--role-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEadmin-roles--role-" onclick="tryItOut('DELETEadmin-roles--role-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEadmin-roles--role-" onclick="cancelTryOut('DELETEadmin-roles--role-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEadmin-roles--role-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>admin/roles/{role}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>role</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="role" data-endpoint="DELETEadmin-roles--role-" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/users




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-users" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-users"></code></pre>
</div>
<div id="execution-error-GETadmin-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-users"></code></pre>
</div>
<form id="form-GETadmin-users" data-method="GET" data-path="admin/users" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-users" onclick="tryItOut('GETadmin-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-users" onclick="cancelTryOut('GETadmin-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/users</code></b>
</p>
</form>


## admin/users/create




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/users/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/users/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-users-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-users-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-users-create"></code></pre>
</div>
<div id="execution-error-GETadmin-users-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-users-create"></code></pre>
</div>
<form id="form-GETadmin-users-create" data-method="GET" data-path="admin/users/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-users-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-users-create" onclick="tryItOut('GETadmin-users-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-users-create" onclick="cancelTryOut('GETadmin-users-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-users-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/users/create</code></b>
</p>
</form>


## admin/users




> Example request:

```bash
curl -X POST \
    "http://MammaSend.test/admin/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"architecto","email":"illum","password":"sunt","roles":[1,3]}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "architecto",
    "email": "illum",
    "password": "sunt",
    "roles": [
        1,
        3
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-users" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-users"></code></pre>
</div>
<div id="execution-error-POSTadmin-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-users"></code></pre>
</div>
<form id="form-POSTadmin-users" data-method="POST" data-path="admin/users" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-users" onclick="tryItOut('POSTadmin-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-users" onclick="cancelTryOut('POSTadmin-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/users</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTadmin-users" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTadmin-users" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTadmin-users" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>roles</code></b>&nbsp;&nbsp;<small>integer[]</small>     <i>optional</i> &nbsp;
<input type="number" name="roles.0" data-endpoint="POSTadmin-users" data-component="body"  hidden>
<input type="number" name="roles.1" data-endpoint="POSTadmin-users" data-component="body" hidden>
<br>
</p>

</form>


## admin/users/{user}




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/users/voluptatum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/users/voluptatum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-users--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-users--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-users--user-"></code></pre>
</div>
<div id="execution-error-GETadmin-users--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-users--user-"></code></pre>
</div>
<form id="form-GETadmin-users--user-" data-method="GET" data-path="admin/users/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-users--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-users--user-" onclick="tryItOut('GETadmin-users--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-users--user-" onclick="cancelTryOut('GETadmin-users--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-users--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/users/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="GETadmin-users--user-" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/users/{user}/edit




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/users/vel/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/users/vel/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-users--user--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-users--user--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-users--user--edit"></code></pre>
</div>
<div id="execution-error-GETadmin-users--user--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-users--user--edit"></code></pre>
</div>
<form id="form-GETadmin-users--user--edit" data-method="GET" data-path="admin/users/{user}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-users--user--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-users--user--edit" onclick="tryItOut('GETadmin-users--user--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-users--user--edit" onclick="cancelTryOut('GETadmin-users--user--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-users--user--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/users/{user}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="GETadmin-users--user--edit" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/users/{user}




> Example request:

```bash
curl -X DELETE \
    "http://MammaSend.test/admin/users/quo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/users/quo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEadmin-users--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEadmin-users--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEadmin-users--user-"></code></pre>
</div>
<div id="execution-error-DELETEadmin-users--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEadmin-users--user-"></code></pre>
</div>
<form id="form-DELETEadmin-users--user-" data-method="DELETE" data-path="admin/users/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEadmin-users--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEadmin-users--user-" onclick="tryItOut('DELETEadmin-users--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEadmin-users--user-" onclick="cancelTryOut('DELETEadmin-users--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEadmin-users--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>admin/users/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="DELETEadmin-users--user-" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/addresses




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/addresses"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-addresses" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-addresses"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-addresses"></code></pre>
</div>
<div id="execution-error-GETadmin-addresses" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-addresses"></code></pre>
</div>
<form id="form-GETadmin-addresses" data-method="GET" data-path="admin/addresses" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-addresses', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-addresses" onclick="tryItOut('GETadmin-addresses');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-addresses" onclick="cancelTryOut('GETadmin-addresses');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-addresses" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/addresses</code></b>
</p>
</form>


## admin/addresses/create




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/addresses/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/addresses/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-addresses-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-addresses-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-addresses-create"></code></pre>
</div>
<div id="execution-error-GETadmin-addresses-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-addresses-create"></code></pre>
</div>
<form id="form-GETadmin-addresses-create" data-method="GET" data-path="admin/addresses/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-addresses-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-addresses-create" onclick="tryItOut('GETadmin-addresses-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-addresses-create" onclick="cancelTryOut('GETadmin-addresses-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-addresses-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/addresses/create</code></b>
</p>
</form>


## admin/addresses




> Example request:

```bash
curl -X POST \
    "http://MammaSend.test/admin/addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"street":"est","city":"unde","state":"reiciendis","zip_code":"quas"}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/addresses"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "street": "est",
    "city": "unde",
    "state": "reiciendis",
    "zip_code": "quas"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-addresses" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-addresses"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-addresses"></code></pre>
</div>
<div id="execution-error-POSTadmin-addresses" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-addresses"></code></pre>
</div>
<form id="form-POSTadmin-addresses" data-method="POST" data-path="admin/addresses" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-addresses', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-addresses" onclick="tryItOut('POSTadmin-addresses');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-addresses" onclick="cancelTryOut('POSTadmin-addresses');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-addresses" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/addresses</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>street</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="street" data-endpoint="POSTadmin-addresses" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>city</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="city" data-endpoint="POSTadmin-addresses" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>state</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="state" data-endpoint="POSTadmin-addresses" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>zip_code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="zip_code" data-endpoint="POSTadmin-addresses" data-component="body" required  hidden>
<br>
</p>

</form>


## admin/addresses/{address}




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/addresses/ducimus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/addresses/ducimus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-addresses--address-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-addresses--address-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-addresses--address-"></code></pre>
</div>
<div id="execution-error-GETadmin-addresses--address-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-addresses--address-"></code></pre>
</div>
<form id="form-GETadmin-addresses--address-" data-method="GET" data-path="admin/addresses/{address}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-addresses--address-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-addresses--address-" onclick="tryItOut('GETadmin-addresses--address-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-addresses--address-" onclick="cancelTryOut('GETadmin-addresses--address-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-addresses--address-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/addresses/{address}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address" data-endpoint="GETadmin-addresses--address-" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/addresses/{address}/edit




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/addresses/cupiditate/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/addresses/cupiditate/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-addresses--address--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-addresses--address--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-addresses--address--edit"></code></pre>
</div>
<div id="execution-error-GETadmin-addresses--address--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-addresses--address--edit"></code></pre>
</div>
<form id="form-GETadmin-addresses--address--edit" data-method="GET" data-path="admin/addresses/{address}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-addresses--address--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-addresses--address--edit" onclick="tryItOut('GETadmin-addresses--address--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-addresses--address--edit" onclick="cancelTryOut('GETadmin-addresses--address--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-addresses--address--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/addresses/{address}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address" data-endpoint="GETadmin-addresses--address--edit" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/addresses/{address}




> Example request:

```bash
curl -X PUT \
    "http://MammaSend.test/admin/addresses/iusto" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"street":"nobis","city":"voluptatem","state":"facere","zip_code":"aut"}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/addresses/iusto"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "street": "nobis",
    "city": "voluptatem",
    "state": "facere",
    "zip_code": "aut"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTadmin-addresses--address-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTadmin-addresses--address-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTadmin-addresses--address-"></code></pre>
</div>
<div id="execution-error-PUTadmin-addresses--address-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTadmin-addresses--address-"></code></pre>
</div>
<form id="form-PUTadmin-addresses--address-" data-method="PUT" data-path="admin/addresses/{address}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTadmin-addresses--address-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTadmin-addresses--address-" onclick="tryItOut('PUTadmin-addresses--address-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTadmin-addresses--address-" onclick="cancelTryOut('PUTadmin-addresses--address-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTadmin-addresses--address-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>admin/addresses/{address}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>admin/addresses/{address}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address" data-endpoint="PUTadmin-addresses--address-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>street</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="street" data-endpoint="PUTadmin-addresses--address-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>city</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="city" data-endpoint="PUTadmin-addresses--address-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>state</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="state" data-endpoint="PUTadmin-addresses--address-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>zip_code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="zip_code" data-endpoint="PUTadmin-addresses--address-" data-component="body" required  hidden>
<br>
</p>

</form>


## admin/addresses/{address}




> Example request:

```bash
curl -X DELETE \
    "http://MammaSend.test/admin/addresses/corrupti" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/addresses/corrupti"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEadmin-addresses--address-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEadmin-addresses--address-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEadmin-addresses--address-"></code></pre>
</div>
<div id="execution-error-DELETEadmin-addresses--address-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEadmin-addresses--address-"></code></pre>
</div>
<form id="form-DELETEadmin-addresses--address-" data-method="DELETE" data-path="admin/addresses/{address}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEadmin-addresses--address-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEadmin-addresses--address-" onclick="tryItOut('DELETEadmin-addresses--address-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEadmin-addresses--address-" onclick="cancelTryOut('DELETEadmin-addresses--address-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEadmin-addresses--address-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>admin/addresses/{address}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address" data-endpoint="DELETEadmin-addresses--address-" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/rides




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/rides" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/rides"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-rides" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-rides"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-rides"></code></pre>
</div>
<div id="execution-error-GETadmin-rides" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-rides"></code></pre>
</div>
<form id="form-GETadmin-rides" data-method="GET" data-path="admin/rides" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-rides', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-rides" onclick="tryItOut('GETadmin-rides');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-rides" onclick="cancelTryOut('GETadmin-rides');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-rides" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/rides</code></b>
</p>
</form>


## admin/rides/create




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/rides/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/rides/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-rides-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-rides-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-rides-create"></code></pre>
</div>
<div id="execution-error-GETadmin-rides-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-rides-create"></code></pre>
</div>
<form id="form-GETadmin-rides-create" data-method="GET" data-path="admin/rides/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-rides-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-rides-create" onclick="tryItOut('GETadmin-rides-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-rides-create" onclick="cancelTryOut('GETadmin-rides-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-rides-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/rides/create</code></b>
</p>
</form>


## admin/rides




> Example request:

```bash
curl -X POST \
    "http://MammaSend.test/admin/rides" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"rider_id":13}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/rides"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "rider_id": 13
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-rides" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-rides"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-rides"></code></pre>
</div>
<div id="execution-error-POSTadmin-rides" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-rides"></code></pre>
</div>
<form id="form-POSTadmin-rides" data-method="POST" data-path="admin/rides" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-rides', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-rides" onclick="tryItOut('POSTadmin-rides');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-rides" onclick="cancelTryOut('POSTadmin-rides');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-rides" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/rides</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>rider_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="rider_id" data-endpoint="POSTadmin-rides" data-component="body" required  hidden>
<br>
</p>

</form>


## admin/rides/{ride}




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/rides/repudiandae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/rides/repudiandae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-rides--ride-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-rides--ride-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-rides--ride-"></code></pre>
</div>
<div id="execution-error-GETadmin-rides--ride-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-rides--ride-"></code></pre>
</div>
<form id="form-GETadmin-rides--ride-" data-method="GET" data-path="admin/rides/{ride}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-rides--ride-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-rides--ride-" onclick="tryItOut('GETadmin-rides--ride-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-rides--ride-" onclick="cancelTryOut('GETadmin-rides--ride-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-rides--ride-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/rides/{ride}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>ride</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ride" data-endpoint="GETadmin-rides--ride-" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/rides/{ride}/edit




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/rides/ducimus/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/rides/ducimus/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-rides--ride--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-rides--ride--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-rides--ride--edit"></code></pre>
</div>
<div id="execution-error-GETadmin-rides--ride--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-rides--ride--edit"></code></pre>
</div>
<form id="form-GETadmin-rides--ride--edit" data-method="GET" data-path="admin/rides/{ride}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-rides--ride--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-rides--ride--edit" onclick="tryItOut('GETadmin-rides--ride--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-rides--ride--edit" onclick="cancelTryOut('GETadmin-rides--ride--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-rides--ride--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/rides/{ride}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>ride</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ride" data-endpoint="GETadmin-rides--ride--edit" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/rides/{ride}




> Example request:

```bash
curl -X PUT \
    "http://MammaSend.test/admin/rides/cum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"rider_id":15}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/rides/cum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "rider_id": 15
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTadmin-rides--ride-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTadmin-rides--ride-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTadmin-rides--ride-"></code></pre>
</div>
<div id="execution-error-PUTadmin-rides--ride-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTadmin-rides--ride-"></code></pre>
</div>
<form id="form-PUTadmin-rides--ride-" data-method="PUT" data-path="admin/rides/{ride}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTadmin-rides--ride-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTadmin-rides--ride-" onclick="tryItOut('PUTadmin-rides--ride-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTadmin-rides--ride-" onclick="cancelTryOut('PUTadmin-rides--ride-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTadmin-rides--ride-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>admin/rides/{ride}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>admin/rides/{ride}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>ride</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ride" data-endpoint="PUTadmin-rides--ride-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>rider_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="rider_id" data-endpoint="PUTadmin-rides--ride-" data-component="body" required  hidden>
<br>
</p>

</form>


## admin/rides/{ride}




> Example request:

```bash
curl -X DELETE \
    "http://MammaSend.test/admin/rides/quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/rides/quia"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEadmin-rides--ride-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEadmin-rides--ride-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEadmin-rides--ride-"></code></pre>
</div>
<div id="execution-error-DELETEadmin-rides--ride-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEadmin-rides--ride-"></code></pre>
</div>
<form id="form-DELETEadmin-rides--ride-" data-method="DELETE" data-path="admin/rides/{ride}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEadmin-rides--ride-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEadmin-rides--ride-" onclick="tryItOut('DELETEadmin-rides--ride-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEadmin-rides--ride-" onclick="cancelTryOut('DELETEadmin-rides--ride-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEadmin-rides--ride-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>admin/rides/{ride}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>ride</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ride" data-endpoint="DELETEadmin-rides--ride-" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/payments




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/payments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/payments"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-payments" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-payments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-payments"></code></pre>
</div>
<div id="execution-error-GETadmin-payments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-payments"></code></pre>
</div>
<form id="form-GETadmin-payments" data-method="GET" data-path="admin/payments" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-payments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-payments" onclick="tryItOut('GETadmin-payments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-payments" onclick="cancelTryOut('GETadmin-payments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-payments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/payments</code></b>
</p>
</form>


## admin/payments/create




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/payments/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/payments/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-payments-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-payments-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-payments-create"></code></pre>
</div>
<div id="execution-error-GETadmin-payments-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-payments-create"></code></pre>
</div>
<form id="form-GETadmin-payments-create" data-method="GET" data-path="admin/payments/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-payments-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-payments-create" onclick="tryItOut('GETadmin-payments-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-payments-create" onclick="cancelTryOut('GETadmin-payments-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-payments-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/payments/create</code></b>
</p>
</form>


## admin/payments




> Example request:

```bash
curl -X POST \
    "http://MammaSend.test/admin/payments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"total_received":"omnis","rider_received":"laborum","office_received":"repudiandae","user_id":3}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/payments"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "total_received": "omnis",
    "rider_received": "laborum",
    "office_received": "repudiandae",
    "user_id": 3
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-payments" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-payments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-payments"></code></pre>
</div>
<div id="execution-error-POSTadmin-payments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-payments"></code></pre>
</div>
<form id="form-POSTadmin-payments" data-method="POST" data-path="admin/payments" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-payments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-payments" onclick="tryItOut('POSTadmin-payments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-payments" onclick="cancelTryOut('POSTadmin-payments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-payments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/payments</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>total_received</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="total_received" data-endpoint="POSTadmin-payments" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>rider_received</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="rider_received" data-endpoint="POSTadmin-payments" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>office_received</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="office_received" data-endpoint="POSTadmin-payments" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="POSTadmin-payments" data-component="body" required  hidden>
<br>
</p>

</form>


## admin/payments/{payment}




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/payments/voluptatibus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/payments/voluptatibus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-payments--payment-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-payments--payment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-payments--payment-"></code></pre>
</div>
<div id="execution-error-GETadmin-payments--payment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-payments--payment-"></code></pre>
</div>
<form id="form-GETadmin-payments--payment-" data-method="GET" data-path="admin/payments/{payment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-payments--payment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-payments--payment-" onclick="tryItOut('GETadmin-payments--payment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-payments--payment-" onclick="cancelTryOut('GETadmin-payments--payment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-payments--payment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/payments/{payment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>payment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="payment" data-endpoint="GETadmin-payments--payment-" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/payments/{payment}/edit




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/payments/nemo/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/payments/nemo/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-payments--payment--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-payments--payment--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-payments--payment--edit"></code></pre>
</div>
<div id="execution-error-GETadmin-payments--payment--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-payments--payment--edit"></code></pre>
</div>
<form id="form-GETadmin-payments--payment--edit" data-method="GET" data-path="admin/payments/{payment}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-payments--payment--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-payments--payment--edit" onclick="tryItOut('GETadmin-payments--payment--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-payments--payment--edit" onclick="cancelTryOut('GETadmin-payments--payment--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-payments--payment--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/payments/{payment}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>payment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="payment" data-endpoint="GETadmin-payments--payment--edit" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/payments/{payment}




> Example request:

```bash
curl -X PUT \
    "http://MammaSend.test/admin/payments/eum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"total_received":"ab","rider_received":"in","office_received":"numquam","user_id":16}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/payments/eum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "total_received": "ab",
    "rider_received": "in",
    "office_received": "numquam",
    "user_id": 16
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTadmin-payments--payment-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTadmin-payments--payment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTadmin-payments--payment-"></code></pre>
</div>
<div id="execution-error-PUTadmin-payments--payment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTadmin-payments--payment-"></code></pre>
</div>
<form id="form-PUTadmin-payments--payment-" data-method="PUT" data-path="admin/payments/{payment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTadmin-payments--payment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTadmin-payments--payment-" onclick="tryItOut('PUTadmin-payments--payment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTadmin-payments--payment-" onclick="cancelTryOut('PUTadmin-payments--payment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTadmin-payments--payment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>admin/payments/{payment}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>admin/payments/{payment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>payment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="payment" data-endpoint="PUTadmin-payments--payment-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>total_received</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="total_received" data-endpoint="PUTadmin-payments--payment-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>rider_received</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="rider_received" data-endpoint="PUTadmin-payments--payment-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>office_received</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="office_received" data-endpoint="PUTadmin-payments--payment-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="PUTadmin-payments--payment-" data-component="body" required  hidden>
<br>
</p>

</form>


## admin/payments/{payment}




> Example request:

```bash
curl -X DELETE \
    "http://MammaSend.test/admin/payments/neque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/payments/neque"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEadmin-payments--payment-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEadmin-payments--payment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEadmin-payments--payment-"></code></pre>
</div>
<div id="execution-error-DELETEadmin-payments--payment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEadmin-payments--payment-"></code></pre>
</div>
<form id="form-DELETEadmin-payments--payment-" data-method="DELETE" data-path="admin/payments/{payment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEadmin-payments--payment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEadmin-payments--payment-" onclick="tryItOut('DELETEadmin-payments--payment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEadmin-payments--payment-" onclick="cancelTryOut('DELETEadmin-payments--payment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEadmin-payments--payment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>admin/payments/{payment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>payment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="payment" data-endpoint="DELETEadmin-payments--payment-" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/faq-categories




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/faq-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/faq-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-faq-categories" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-faq-categories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-faq-categories"></code></pre>
</div>
<div id="execution-error-GETadmin-faq-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-faq-categories"></code></pre>
</div>
<form id="form-GETadmin-faq-categories" data-method="GET" data-path="admin/faq-categories" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-faq-categories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-faq-categories" onclick="tryItOut('GETadmin-faq-categories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-faq-categories" onclick="cancelTryOut('GETadmin-faq-categories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-faq-categories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/faq-categories</code></b>
</p>
</form>


## admin/faq-categories/create




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/faq-categories/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/faq-categories/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-faq-categories-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-faq-categories-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-faq-categories-create"></code></pre>
</div>
<div id="execution-error-GETadmin-faq-categories-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-faq-categories-create"></code></pre>
</div>
<form id="form-GETadmin-faq-categories-create" data-method="GET" data-path="admin/faq-categories/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-faq-categories-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-faq-categories-create" onclick="tryItOut('GETadmin-faq-categories-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-faq-categories-create" onclick="cancelTryOut('GETadmin-faq-categories-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-faq-categories-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/faq-categories/create</code></b>
</p>
</form>


## admin/faq-categories




> Example request:

```bash
curl -X POST \
    "http://MammaSend.test/admin/faq-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category":"magnam"}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/faq-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category": "magnam"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-faq-categories" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-faq-categories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-faq-categories"></code></pre>
</div>
<div id="execution-error-POSTadmin-faq-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-faq-categories"></code></pre>
</div>
<form id="form-POSTadmin-faq-categories" data-method="POST" data-path="admin/faq-categories" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-faq-categories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-faq-categories" onclick="tryItOut('POSTadmin-faq-categories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-faq-categories" onclick="cancelTryOut('POSTadmin-faq-categories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-faq-categories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/faq-categories</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category" data-endpoint="POSTadmin-faq-categories" data-component="body" required  hidden>
<br>
</p>

</form>


## admin/faq-categories/{faq_category}




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/faq-categories/asperiores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/faq-categories/asperiores"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-faq-categories--faq_category-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-faq-categories--faq_category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-faq-categories--faq_category-"></code></pre>
</div>
<div id="execution-error-GETadmin-faq-categories--faq_category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-faq-categories--faq_category-"></code></pre>
</div>
<form id="form-GETadmin-faq-categories--faq_category-" data-method="GET" data-path="admin/faq-categories/{faq_category}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-faq-categories--faq_category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-faq-categories--faq_category-" onclick="tryItOut('GETadmin-faq-categories--faq_category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-faq-categories--faq_category-" onclick="cancelTryOut('GETadmin-faq-categories--faq_category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-faq-categories--faq_category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/faq-categories/{faq_category}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>faq_category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="faq_category" data-endpoint="GETadmin-faq-categories--faq_category-" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/faq-categories/{faq_category}/edit




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/faq-categories/ea/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/faq-categories/ea/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-faq-categories--faq_category--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-faq-categories--faq_category--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-faq-categories--faq_category--edit"></code></pre>
</div>
<div id="execution-error-GETadmin-faq-categories--faq_category--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-faq-categories--faq_category--edit"></code></pre>
</div>
<form id="form-GETadmin-faq-categories--faq_category--edit" data-method="GET" data-path="admin/faq-categories/{faq_category}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-faq-categories--faq_category--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-faq-categories--faq_category--edit" onclick="tryItOut('GETadmin-faq-categories--faq_category--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-faq-categories--faq_category--edit" onclick="cancelTryOut('GETadmin-faq-categories--faq_category--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-faq-categories--faq_category--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/faq-categories/{faq_category}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>faq_category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="faq_category" data-endpoint="GETadmin-faq-categories--faq_category--edit" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/faq-categories/{faq_category}




> Example request:

```bash
curl -X PUT \
    "http://MammaSend.test/admin/faq-categories/ad" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category":"quasi"}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/faq-categories/ad"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category": "quasi"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTadmin-faq-categories--faq_category-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTadmin-faq-categories--faq_category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTadmin-faq-categories--faq_category-"></code></pre>
</div>
<div id="execution-error-PUTadmin-faq-categories--faq_category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTadmin-faq-categories--faq_category-"></code></pre>
</div>
<form id="form-PUTadmin-faq-categories--faq_category-" data-method="PUT" data-path="admin/faq-categories/{faq_category}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTadmin-faq-categories--faq_category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTadmin-faq-categories--faq_category-" onclick="tryItOut('PUTadmin-faq-categories--faq_category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTadmin-faq-categories--faq_category-" onclick="cancelTryOut('PUTadmin-faq-categories--faq_category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTadmin-faq-categories--faq_category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>admin/faq-categories/{faq_category}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>admin/faq-categories/{faq_category}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>faq_category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="faq_category" data-endpoint="PUTadmin-faq-categories--faq_category-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category" data-endpoint="PUTadmin-faq-categories--faq_category-" data-component="body" required  hidden>
<br>
</p>

</form>


## admin/faq-categories/{faq_category}




> Example request:

```bash
curl -X DELETE \
    "http://MammaSend.test/admin/faq-categories/dolorum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/faq-categories/dolorum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEadmin-faq-categories--faq_category-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEadmin-faq-categories--faq_category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEadmin-faq-categories--faq_category-"></code></pre>
</div>
<div id="execution-error-DELETEadmin-faq-categories--faq_category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEadmin-faq-categories--faq_category-"></code></pre>
</div>
<form id="form-DELETEadmin-faq-categories--faq_category-" data-method="DELETE" data-path="admin/faq-categories/{faq_category}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEadmin-faq-categories--faq_category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEadmin-faq-categories--faq_category-" onclick="tryItOut('DELETEadmin-faq-categories--faq_category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEadmin-faq-categories--faq_category-" onclick="cancelTryOut('DELETEadmin-faq-categories--faq_category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEadmin-faq-categories--faq_category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>admin/faq-categories/{faq_category}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>faq_category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="faq_category" data-endpoint="DELETEadmin-faq-categories--faq_category-" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/faq-questions




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/faq-questions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/faq-questions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-faq-questions" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-faq-questions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-faq-questions"></code></pre>
</div>
<div id="execution-error-GETadmin-faq-questions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-faq-questions"></code></pre>
</div>
<form id="form-GETadmin-faq-questions" data-method="GET" data-path="admin/faq-questions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-faq-questions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-faq-questions" onclick="tryItOut('GETadmin-faq-questions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-faq-questions" onclick="cancelTryOut('GETadmin-faq-questions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-faq-questions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/faq-questions</code></b>
</p>
</form>


## admin/faq-questions/create




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/faq-questions/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/faq-questions/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-faq-questions-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-faq-questions-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-faq-questions-create"></code></pre>
</div>
<div id="execution-error-GETadmin-faq-questions-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-faq-questions-create"></code></pre>
</div>
<form id="form-GETadmin-faq-questions-create" data-method="GET" data-path="admin/faq-questions/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-faq-questions-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-faq-questions-create" onclick="tryItOut('GETadmin-faq-questions-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-faq-questions-create" onclick="cancelTryOut('GETadmin-faq-questions-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-faq-questions-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/faq-questions/create</code></b>
</p>
</form>


## admin/faq-questions




> Example request:

```bash
curl -X POST \
    "http://MammaSend.test/admin/faq-questions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category_id":13,"question":"doloribus","answer":"dolorum"}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/faq-questions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_id": 13,
    "question": "doloribus",
    "answer": "dolorum"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-faq-questions" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-faq-questions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-faq-questions"></code></pre>
</div>
<div id="execution-error-POSTadmin-faq-questions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-faq-questions"></code></pre>
</div>
<form id="form-POSTadmin-faq-questions" data-method="POST" data-path="admin/faq-questions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-faq-questions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-faq-questions" onclick="tryItOut('POSTadmin-faq-questions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-faq-questions" onclick="cancelTryOut('POSTadmin-faq-questions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-faq-questions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/faq-questions</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>category_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="category_id" data-endpoint="POSTadmin-faq-questions" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>question</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="question" data-endpoint="POSTadmin-faq-questions" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>answer</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="answer" data-endpoint="POSTadmin-faq-questions" data-component="body" required  hidden>
<br>
</p>

</form>


## admin/faq-questions/{faq_question}




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/faq-questions/voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/faq-questions/voluptas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-faq-questions--faq_question-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-faq-questions--faq_question-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-faq-questions--faq_question-"></code></pre>
</div>
<div id="execution-error-GETadmin-faq-questions--faq_question-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-faq-questions--faq_question-"></code></pre>
</div>
<form id="form-GETadmin-faq-questions--faq_question-" data-method="GET" data-path="admin/faq-questions/{faq_question}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-faq-questions--faq_question-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-faq-questions--faq_question-" onclick="tryItOut('GETadmin-faq-questions--faq_question-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-faq-questions--faq_question-" onclick="cancelTryOut('GETadmin-faq-questions--faq_question-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-faq-questions--faq_question-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/faq-questions/{faq_question}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>faq_question</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="faq_question" data-endpoint="GETadmin-faq-questions--faq_question-" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/faq-questions/{faq_question}/edit




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/admin/faq-questions/consequatur/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/faq-questions/consequatur/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-faq-questions--faq_question--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-faq-questions--faq_question--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-faq-questions--faq_question--edit"></code></pre>
</div>
<div id="execution-error-GETadmin-faq-questions--faq_question--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-faq-questions--faq_question--edit"></code></pre>
</div>
<form id="form-GETadmin-faq-questions--faq_question--edit" data-method="GET" data-path="admin/faq-questions/{faq_question}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-faq-questions--faq_question--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-faq-questions--faq_question--edit" onclick="tryItOut('GETadmin-faq-questions--faq_question--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-faq-questions--faq_question--edit" onclick="cancelTryOut('GETadmin-faq-questions--faq_question--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-faq-questions--faq_question--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/faq-questions/{faq_question}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>faq_question</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="faq_question" data-endpoint="GETadmin-faq-questions--faq_question--edit" data-component="url" required  hidden>
<br>
</p>
</form>


## admin/faq-questions/{faq_question}




> Example request:

```bash
curl -X PUT \
    "http://MammaSend.test/admin/faq-questions/eaque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category_id":6,"question":"aut","answer":"quo"}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/faq-questions/eaque"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_id": 6,
    "question": "aut",
    "answer": "quo"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTadmin-faq-questions--faq_question-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTadmin-faq-questions--faq_question-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTadmin-faq-questions--faq_question-"></code></pre>
</div>
<div id="execution-error-PUTadmin-faq-questions--faq_question-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTadmin-faq-questions--faq_question-"></code></pre>
</div>
<form id="form-PUTadmin-faq-questions--faq_question-" data-method="PUT" data-path="admin/faq-questions/{faq_question}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTadmin-faq-questions--faq_question-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTadmin-faq-questions--faq_question-" onclick="tryItOut('PUTadmin-faq-questions--faq_question-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTadmin-faq-questions--faq_question-" onclick="cancelTryOut('PUTadmin-faq-questions--faq_question-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTadmin-faq-questions--faq_question-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>admin/faq-questions/{faq_question}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>admin/faq-questions/{faq_question}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>faq_question</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="faq_question" data-endpoint="PUTadmin-faq-questions--faq_question-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>category_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="category_id" data-endpoint="PUTadmin-faq-questions--faq_question-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>question</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="question" data-endpoint="PUTadmin-faq-questions--faq_question-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>answer</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="answer" data-endpoint="PUTadmin-faq-questions--faq_question-" data-component="body" required  hidden>
<br>
</p>

</form>


## admin/faq-questions/{faq_question}




> Example request:

```bash
curl -X DELETE \
    "http://MammaSend.test/admin/faq-questions/aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/admin/faq-questions/aut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEadmin-faq-questions--faq_question-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEadmin-faq-questions--faq_question-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEadmin-faq-questions--faq_question-"></code></pre>
</div>
<div id="execution-error-DELETEadmin-faq-questions--faq_question-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEadmin-faq-questions--faq_question-"></code></pre>
</div>
<form id="form-DELETEadmin-faq-questions--faq_question-" data-method="DELETE" data-path="admin/faq-questions/{faq_question}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEadmin-faq-questions--faq_question-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEadmin-faq-questions--faq_question-" onclick="tryItOut('DELETEadmin-faq-questions--faq_question-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEadmin-faq-questions--faq_question-" onclick="cancelTryOut('DELETEadmin-faq-questions--faq_question-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEadmin-faq-questions--faq_question-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>admin/faq-questions/{faq_question}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>faq_question</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="faq_question" data-endpoint="DELETEadmin-faq-questions--faq_question-" data-component="url" required  hidden>
<br>
</p>
</form>


## profile/password




> Example request:

```bash
curl -X GET \
    -G "http://MammaSend.test/profile/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/profile/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETprofile-password" hidden>
    <blockquote>Received response<span id="execution-response-status-GETprofile-password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETprofile-password"></code></pre>
</div>
<div id="execution-error-GETprofile-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETprofile-password"></code></pre>
</div>
<form id="form-GETprofile-password" data-method="GET" data-path="profile/password" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETprofile-password', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETprofile-password" onclick="tryItOut('GETprofile-password');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETprofile-password" onclick="cancelTryOut('GETprofile-password');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETprofile-password" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>profile/password</code></b>
</p>
</form>


## profile/password




> Example request:

```bash
curl -X POST \
    "http://MammaSend.test/profile/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"password":"quis"}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/profile/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "quis"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTprofile-password" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTprofile-password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTprofile-password"></code></pre>
</div>
<div id="execution-error-POSTprofile-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTprofile-password"></code></pre>
</div>
<form id="form-POSTprofile-password" data-method="POST" data-path="profile/password" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTprofile-password', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTprofile-password" onclick="tryItOut('POSTprofile-password');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTprofile-password" onclick="cancelTryOut('POSTprofile-password');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTprofile-password" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>profile/password</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTprofile-password" data-component="body" required  hidden>
<br>
</p>

</form>


## profile/profile




> Example request:

```bash
curl -X POST \
    "http://MammaSend.test/profile/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"eaque","email":"kunze.carmella@example.net"}'

```

```javascript
const url = new URL(
    "http://MammaSend.test/profile/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "eaque",
    "email": "kunze.carmella@example.net"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTprofile-profile" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTprofile-profile"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTprofile-profile"></code></pre>
</div>
<div id="execution-error-POSTprofile-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTprofile-profile"></code></pre>
</div>
<form id="form-POSTprofile-profile" data-method="POST" data-path="profile/profile" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTprofile-profile', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTprofile-profile" onclick="tryItOut('POSTprofile-profile');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTprofile-profile" onclick="cancelTryOut('POSTprofile-profile');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTprofile-profile" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>profile/profile</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTprofile-profile" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTprofile-profile" data-component="body" required  hidden>
<br>
The value must be a valid email address.</p>

</form>


## profile/profile/destroy




> Example request:

```bash
curl -X POST \
    "http://MammaSend.test/profile/profile/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://MammaSend.test/profile/profile/destroy"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTprofile-profile-destroy" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTprofile-profile-destroy"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTprofile-profile-destroy"></code></pre>
</div>
<div id="execution-error-POSTprofile-profile-destroy" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTprofile-profile-destroy"></code></pre>
</div>
<form id="form-POSTprofile-profile-destroy" data-method="POST" data-path="profile/profile/destroy" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTprofile-profile-destroy', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTprofile-profile-destroy" onclick="tryItOut('POSTprofile-profile-destroy');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTprofile-profile-destroy" onclick="cancelTryOut('POSTprofile-profile-destroy');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTprofile-profile-destroy" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>profile/profile/destroy</code></b>
</p>
</form>



