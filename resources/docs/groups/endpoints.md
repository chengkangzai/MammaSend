# Endpoints


## api/v1/permissions




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/api/v1/permissions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/permissions"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/api/v1/permissions',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/permissions'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/api/v1/permissions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"eaque"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/permissions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "eaque"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://mamma-send.herokuapp.com/api/v1/permissions',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'title' => 'eaque',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/permissions'
payload = {
    "title": "eaque"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
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
    -G "https://mamma-send.herokuapp.com/api/v1/permissions/laudantium" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/permissions/laudantium"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/api/v1/permissions/laudantium',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/permissions/laudantium'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/api/v1/permissions/dolores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"qui"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/permissions/dolores"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'https://mamma-send.herokuapp.com/api/v1/permissions/dolores',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'title' => 'qui',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/permissions/dolores'
payload = {
    "title": "qui"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()
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
    "https://mamma-send.herokuapp.com/api/v1/permissions/nihil" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/permissions/nihil"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'https://mamma-send.herokuapp.com/api/v1/permissions/nihil',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/permissions/nihil'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/api/v1/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/roles"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/api/v1/roles',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/roles'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/api/v1/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"vitae","permissions":[13,12]}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "vitae",
    "permissions": [
        13,
        12
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://mamma-send.herokuapp.com/api/v1/roles',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'title' => 'vitae',
            'permissions' => [
                13,
                12,
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/roles'
payload = {
    "title": "vitae",
    "permissions": [
        13,
        12
    ]
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
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
    -G "https://mamma-send.herokuapp.com/api/v1/roles/consectetur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/roles/consectetur"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/api/v1/roles/consectetur',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/roles/consectetur'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/api/v1/roles/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"est","permissions":[9,19]}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/roles/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "est",
    "permissions": [
        9,
        19
    ]
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'https://mamma-send.herokuapp.com/api/v1/roles/et',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'title' => 'est',
            'permissions' => [
                9,
                19,
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/roles/et'
payload = {
    "title": "est",
    "permissions": [
        9,
        19
    ]
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()
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
    "https://mamma-send.herokuapp.com/api/v1/roles/ipsa" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/roles/ipsa"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'https://mamma-send.herokuapp.com/api/v1/roles/ipsa',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/roles/ipsa'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/api/v1/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/users"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/api/v1/users',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/users'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/api/v1/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"itaque","email":"sit","password":"earum","roles":[12,15]}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "itaque",
    "email": "sit",
    "password": "earum",
    "roles": [
        12,
        15
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://mamma-send.herokuapp.com/api/v1/users',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'name' => 'itaque',
            'email' => 'sit',
            'password' => 'earum',
            'roles' => [
                12,
                15,
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/users'
payload = {
    "name": "itaque",
    "email": "sit",
    "password": "earum",
    "roles": [
        12,
        15
    ]
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
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
    -G "https://mamma-send.herokuapp.com/api/v1/users/consectetur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/users/consectetur"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/api/v1/users/consectetur',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/users/consectetur'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/api/v1/users/minima" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/users/minima"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'https://mamma-send.herokuapp.com/api/v1/users/minima',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/users/minima'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/api/v1/addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/addresses"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/api/v1/addresses',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/addresses'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/api/v1/addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"street":"excepturi","city":"unde","state":"dicta","zip_code":"ut"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/addresses"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "street": "excepturi",
    "city": "unde",
    "state": "dicta",
    "zip_code": "ut"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://mamma-send.herokuapp.com/api/v1/addresses',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'street' => 'excepturi',
            'city' => 'unde',
            'state' => 'dicta',
            'zip_code' => 'ut',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/addresses'
payload = {
    "street": "excepturi",
    "city": "unde",
    "state": "dicta",
    "zip_code": "ut"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
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
    -G "https://mamma-send.herokuapp.com/api/v1/addresses/consequuntur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/addresses/consequuntur"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/api/v1/addresses/consequuntur',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/addresses/consequuntur'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/api/v1/addresses/sapiente" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"street":"consectetur","city":"odit","state":"tenetur","zip_code":"voluptatem"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/addresses/sapiente"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "street": "consectetur",
    "city": "odit",
    "state": "tenetur",
    "zip_code": "voluptatem"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'https://mamma-send.herokuapp.com/api/v1/addresses/sapiente',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'street' => 'consectetur',
            'city' => 'odit',
            'state' => 'tenetur',
            'zip_code' => 'voluptatem',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/addresses/sapiente'
payload = {
    "street": "consectetur",
    "city": "odit",
    "state": "tenetur",
    "zip_code": "voluptatem"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()
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
    "https://mamma-send.herokuapp.com/api/v1/addresses/unde" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/addresses/unde"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'https://mamma-send.herokuapp.com/api/v1/addresses/unde',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/addresses/unde'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/api/v1/rides" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/rides"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/api/v1/rides',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/rides'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/api/v1/rides" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"rider_id":9}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/rides"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "rider_id": 9
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://mamma-send.herokuapp.com/api/v1/rides',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'rider_id' => 9,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/rides'
payload = {
    "rider_id": 9
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
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
    -G "https://mamma-send.herokuapp.com/api/v1/rides/at" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/rides/at"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/api/v1/rides/at',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/rides/at'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/api/v1/rides/sed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"rider_id":14}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/rides/sed"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "rider_id": 14
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'https://mamma-send.herokuapp.com/api/v1/rides/sed',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'rider_id' => 14,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/rides/sed'
payload = {
    "rider_id": 14
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()
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
    "https://mamma-send.herokuapp.com/api/v1/rides/ullam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/rides/ullam"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'https://mamma-send.herokuapp.com/api/v1/rides/ullam',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/rides/ullam'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/api/v1/payments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/payments"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/api/v1/payments',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/payments'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/api/v1/payments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"total_received":"qui","rider_received":"id","office_received":"maiores","user_id":7}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/payments"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "total_received": "qui",
    "rider_received": "id",
    "office_received": "maiores",
    "user_id": 7
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://mamma-send.herokuapp.com/api/v1/payments',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'total_received' => 'qui',
            'rider_received' => 'id',
            'office_received' => 'maiores',
            'user_id' => 7,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/payments'
payload = {
    "total_received": "qui",
    "rider_received": "id",
    "office_received": "maiores",
    "user_id": 7
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
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
    -G "https://mamma-send.herokuapp.com/api/v1/payments/quisquam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/payments/quisquam"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/api/v1/payments/quisquam',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/payments/quisquam'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/api/v1/payments/reiciendis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"total_received":"tempore","rider_received":"provident","office_received":"nemo","user_id":2}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/payments/reiciendis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "total_received": "tempore",
    "rider_received": "provident",
    "office_received": "nemo",
    "user_id": 2
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'https://mamma-send.herokuapp.com/api/v1/payments/reiciendis',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'total_received' => 'tempore',
            'rider_received' => 'provident',
            'office_received' => 'nemo',
            'user_id' => 2,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/payments/reiciendis'
payload = {
    "total_received": "tempore",
    "rider_received": "provident",
    "office_received": "nemo",
    "user_id": 2
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()
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
    "https://mamma-send.herokuapp.com/api/v1/payments/nihil" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/payments/nihil"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'https://mamma-send.herokuapp.com/api/v1/payments/nihil',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/payments/nihil'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/api/v1/faq-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/faq-categories"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/api/v1/faq-categories',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/faq-categories'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/api/v1/faq-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category":"labore"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/faq-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category": "labore"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://mamma-send.herokuapp.com/api/v1/faq-categories',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'category' => 'labore',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/faq-categories'
payload = {
    "category": "labore"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
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
    -G "https://mamma-send.herokuapp.com/api/v1/faq-categories/animi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/faq-categories/animi"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/api/v1/faq-categories/animi',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/faq-categories/animi'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/api/v1/faq-categories/exercitationem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category":"dolore"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/faq-categories/exercitationem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category": "dolore"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'https://mamma-send.herokuapp.com/api/v1/faq-categories/exercitationem',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'category' => 'dolore',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/faq-categories/exercitationem'
payload = {
    "category": "dolore"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()
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
    "https://mamma-send.herokuapp.com/api/v1/faq-categories/non" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/faq-categories/non"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'https://mamma-send.herokuapp.com/api/v1/faq-categories/non',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/faq-categories/non'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/api/v1/faq-questions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/faq-questions"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/api/v1/faq-questions',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/faq-questions'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/api/v1/faq-questions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category_id":18,"question":"minima","answer":"eveniet"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/faq-questions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_id": 18,
    "question": "minima",
    "answer": "eveniet"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://mamma-send.herokuapp.com/api/v1/faq-questions',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'category_id' => 18,
            'question' => 'minima',
            'answer' => 'eveniet',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/faq-questions'
payload = {
    "category_id": 18,
    "question": "minima",
    "answer": "eveniet"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
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
    -G "https://mamma-send.herokuapp.com/api/v1/faq-questions/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/faq-questions/ut"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/api/v1/faq-questions/ut',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/faq-questions/ut'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/api/v1/faq-questions/id" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category_id":15,"question":"cum","answer":"et"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/faq-questions/id"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_id": 15,
    "question": "cum",
    "answer": "et"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'https://mamma-send.herokuapp.com/api/v1/faq-questions/id',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'category_id' => 15,
            'question' => 'cum',
            'answer' => 'et',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/faq-questions/id'
payload = {
    "category_id": 15,
    "question": "cum",
    "answer": "et"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()
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
    "https://mamma-send.herokuapp.com/api/v1/faq-questions/sint" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/faq-questions/sint"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'https://mamma-send.herokuapp.com/api/v1/faq-questions/sint',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/faq-questions/sint'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com//'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/home"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/home',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/home'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://mamma-send.herokuapp.com/admin'" />

        <title>Redirecting to http://mamma-send.herokuapp.com/admin</title>
    </head>
    <body>
        Redirecting to <a href="http://mamma-send.herokuapp.com/admin">http://mamma-send.herokuapp.com/admin</a>.
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
    -G "https://mamma-send.herokuapp.com/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/login"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/login',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/login'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="8N6jdgouQoyDhaxqsXAeMN7VJwqmWD2Z7E7JA9iS">

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
    <link href="http://mamma-send.herokuapp.com/css/custom.css" rel="stylesheet" />
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

                    
                    <form method="POST" action="http://mamma-send.herokuapp.com/login">
                        <input type="hidden" name="_token" value="8N6jdgouQoyDhaxqsXAeMN7VJwqmWD2Z7E7JA9iS">
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
                                                                    <a class="btn btn-link px-0" href="http://mamma-send.herokuapp.com/password/reset">
                                        Forgot your password?
                                    </a><br>
                                                                <a class="btn btn-link px-0" href="http://mamma-send.herokuapp.com/register">
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
    "https://mamma-send.herokuapp.com/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/login"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://mamma-send.herokuapp.com/login',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/login'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/logout"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://mamma-send.herokuapp.com/logout',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/logout'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/register"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/register',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/register'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="8N6jdgouQoyDhaxqsXAeMN7VJwqmWD2Z7E7JA9iS">

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
    <link href="http://mamma-send.herokuapp.com/css/custom.css" rel="stylesheet" />
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
                    <form method="POST" action="http://mamma-send.herokuapp.com/register">
                        <input type="hidden" name="_token" value="8N6jdgouQoyDhaxqsXAeMN7VJwqmWD2Z7E7JA9iS">
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
    "https://mamma-send.herokuapp.com/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/register"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://mamma-send.herokuapp.com/register',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/register'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/password/reset"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/password/reset',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/password/reset'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="8N6jdgouQoyDhaxqsXAeMN7VJwqmWD2Z7E7JA9iS">

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
    <link href="http://mamma-send.herokuapp.com/css/custom.css" rel="stylesheet" />
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
                    
                    <form method="POST" action="http://mamma-send.herokuapp.com/password/email">
                        <input type="hidden" name="_token" value="8N6jdgouQoyDhaxqsXAeMN7VJwqmWD2Z7E7JA9iS">
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
    "https://mamma-send.herokuapp.com/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/password/email"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://mamma-send.herokuapp.com/password/email',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/password/email'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/password/reset/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/password/reset/ut"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/password/reset/ut',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/password/reset/ut'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="8N6jdgouQoyDhaxqsXAeMN7VJwqmWD2Z7E7JA9iS">

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
    <link href="http://mamma-send.herokuapp.com/css/custom.css" rel="stylesheet" />
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
                    <form method="POST" action="http://mamma-send.herokuapp.com/password/reset">
                        <input type="hidden" name="_token" value="8N6jdgouQoyDhaxqsXAeMN7VJwqmWD2Z7E7JA9iS">
                        <input type="hidden" name="token" value="ut">

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
    "https://mamma-send.herokuapp.com/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/password/reset"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://mamma-send.herokuapp.com/password/reset',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/password/reset'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/password/confirm"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/password/confirm',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/password/confirm'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/password/confirm"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://mamma-send.herokuapp.com/password/confirm',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/password/confirm'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/permissions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/permissions"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/permissions',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/permissions'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/permissions/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/permissions/create"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/permissions/create',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/permissions/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/admin/permissions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"fuga"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/permissions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "fuga"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://mamma-send.herokuapp.com/admin/permissions',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'title' => 'fuga',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/permissions'
payload = {
    "title": "fuga"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/permissions/veritatis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/permissions/veritatis"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/permissions/veritatis',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/permissions/veritatis'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/permissions/est/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/permissions/est/edit"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/permissions/est/edit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/permissions/est/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/admin/permissions/molestiae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"sapiente"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/permissions/molestiae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "sapiente"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'https://mamma-send.herokuapp.com/admin/permissions/molestiae',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'title' => 'sapiente',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/permissions/molestiae'
payload = {
    "title": "sapiente"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()
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
    "https://mamma-send.herokuapp.com/admin/permissions/ipsum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/permissions/ipsum"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'https://mamma-send.herokuapp.com/admin/permissions/ipsum',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/permissions/ipsum'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/roles"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/roles',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/roles'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/roles/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/roles/create"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/roles/create',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/roles/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/admin/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"illo","permissions":[5,13]}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "illo",
    "permissions": [
        5,
        13
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://mamma-send.herokuapp.com/admin/roles',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'title' => 'illo',
            'permissions' => [
                5,
                13,
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/roles'
payload = {
    "title": "illo",
    "permissions": [
        5,
        13
    ]
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/roles/totam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/roles/totam"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/roles/totam',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/roles/totam'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/roles/amet/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/roles/amet/edit"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/roles/amet/edit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/roles/amet/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/admin/roles/autem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"aut","permissions":[13,3]}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/roles/autem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "aut",
    "permissions": [
        13,
        3
    ]
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'https://mamma-send.herokuapp.com/admin/roles/autem',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'title' => 'aut',
            'permissions' => [
                13,
                3,
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/roles/autem'
payload = {
    "title": "aut",
    "permissions": [
        13,
        3
    ]
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()
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
    "https://mamma-send.herokuapp.com/admin/roles/sunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/roles/sunt"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'https://mamma-send.herokuapp.com/admin/roles/sunt',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/roles/sunt'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/users"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/users',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/users'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/users/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/users/create"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/users/create',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/users/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/admin/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"culpa","email":"dignissimos","password":"vitae","roles":[17,16]}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "culpa",
    "email": "dignissimos",
    "password": "vitae",
    "roles": [
        17,
        16
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://mamma-send.herokuapp.com/admin/users',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'name' => 'culpa',
            'email' => 'dignissimos',
            'password' => 'vitae',
            'roles' => [
                17,
                16,
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/users'
payload = {
    "name": "culpa",
    "email": "dignissimos",
    "password": "vitae",
    "roles": [
        17,
        16
    ]
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/users/temporibus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/users/temporibus"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/users/temporibus',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/users/temporibus'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/users/dolor/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/users/dolor/edit"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/users/dolor/edit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/users/dolor/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/admin/users/enim" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/users/enim"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'https://mamma-send.herokuapp.com/admin/users/enim',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/users/enim'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/addresses"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/addresses',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/addresses'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/addresses/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/addresses/create"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/addresses/create',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/addresses/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/admin/addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"street":"sit","city":"qui","state":"dolores","zip_code":"iste"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/addresses"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "street": "sit",
    "city": "qui",
    "state": "dolores",
    "zip_code": "iste"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://mamma-send.herokuapp.com/admin/addresses',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'street' => 'sit',
            'city' => 'qui',
            'state' => 'dolores',
            'zip_code' => 'iste',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/addresses'
payload = {
    "street": "sit",
    "city": "qui",
    "state": "dolores",
    "zip_code": "iste"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/addresses/quibusdam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/addresses/quibusdam"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/addresses/quibusdam',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/addresses/quibusdam'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/addresses/necessitatibus/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/addresses/necessitatibus/edit"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/addresses/necessitatibus/edit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/addresses/necessitatibus/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/admin/addresses/aperiam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"street":"esse","city":"earum","state":"explicabo","zip_code":"et"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/addresses/aperiam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "street": "esse",
    "city": "earum",
    "state": "explicabo",
    "zip_code": "et"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'https://mamma-send.herokuapp.com/admin/addresses/aperiam',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'street' => 'esse',
            'city' => 'earum',
            'state' => 'explicabo',
            'zip_code' => 'et',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/addresses/aperiam'
payload = {
    "street": "esse",
    "city": "earum",
    "state": "explicabo",
    "zip_code": "et"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()
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
    "https://mamma-send.herokuapp.com/admin/addresses/occaecati" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/addresses/occaecati"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'https://mamma-send.herokuapp.com/admin/addresses/occaecati',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/addresses/occaecati'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/rides" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/rides"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/rides',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/rides'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/rides/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/rides/create"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/rides/create',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/rides/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/admin/rides" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"rider_id":16}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/rides"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "rider_id": 16
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://mamma-send.herokuapp.com/admin/rides',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'rider_id' => 16,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/rides'
payload = {
    "rider_id": 16
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/rides/ullam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/rides/ullam"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/rides/ullam',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/rides/ullam'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/rides/rerum/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/rides/rerum/edit"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/rides/rerum/edit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/rides/rerum/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/admin/rides/mollitia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"rider_id":14}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/rides/mollitia"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "rider_id": 14
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'https://mamma-send.herokuapp.com/admin/rides/mollitia',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'rider_id' => 14,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/rides/mollitia'
payload = {
    "rider_id": 14
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()
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
    "https://mamma-send.herokuapp.com/admin/rides/eligendi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/rides/eligendi"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'https://mamma-send.herokuapp.com/admin/rides/eligendi',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/rides/eligendi'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/payments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/payments"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/payments',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/payments'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/payments/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/payments/create"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/payments/create',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/payments/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/admin/payments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"total_received":"voluptatem","rider_received":"ipsam","office_received":"dolorem","user_id":17}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/payments"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "total_received": "voluptatem",
    "rider_received": "ipsam",
    "office_received": "dolorem",
    "user_id": 17
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://mamma-send.herokuapp.com/admin/payments',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'total_received' => 'voluptatem',
            'rider_received' => 'ipsam',
            'office_received' => 'dolorem',
            'user_id' => 17,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/payments'
payload = {
    "total_received": "voluptatem",
    "rider_received": "ipsam",
    "office_received": "dolorem",
    "user_id": 17
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/payments/quis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/payments/quis"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/payments/quis',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/payments/quis'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/payments/sequi/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/payments/sequi/edit"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/payments/sequi/edit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/payments/sequi/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/admin/payments/culpa" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"total_received":"illo","rider_received":"et","office_received":"quo","user_id":12}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/payments/culpa"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "total_received": "illo",
    "rider_received": "et",
    "office_received": "quo",
    "user_id": 12
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'https://mamma-send.herokuapp.com/admin/payments/culpa',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'total_received' => 'illo',
            'rider_received' => 'et',
            'office_received' => 'quo',
            'user_id' => 12,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/payments/culpa'
payload = {
    "total_received": "illo",
    "rider_received": "et",
    "office_received": "quo",
    "user_id": 12
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()
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
    "https://mamma-send.herokuapp.com/admin/payments/debitis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/payments/debitis"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'https://mamma-send.herokuapp.com/admin/payments/debitis',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/payments/debitis'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/faq-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/faq-categories"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/faq-categories',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/faq-categories'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/faq-categories/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/faq-categories/create"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/faq-categories/create',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/faq-categories/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/admin/faq-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category":"velit"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/faq-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category": "velit"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://mamma-send.herokuapp.com/admin/faq-categories',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'category' => 'velit',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/faq-categories'
payload = {
    "category": "velit"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/faq-categories/id" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/faq-categories/id"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/faq-categories/id',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/faq-categories/id'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/faq-categories/pariatur/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/faq-categories/pariatur/edit"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/faq-categories/pariatur/edit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/faq-categories/pariatur/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/admin/faq-categories/natus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category":"delectus"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/faq-categories/natus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category": "delectus"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'https://mamma-send.herokuapp.com/admin/faq-categories/natus',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'category' => 'delectus',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/faq-categories/natus'
payload = {
    "category": "delectus"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()
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
    "https://mamma-send.herokuapp.com/admin/faq-categories/nisi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/faq-categories/nisi"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'https://mamma-send.herokuapp.com/admin/faq-categories/nisi',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/faq-categories/nisi'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/faq-questions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/faq-questions"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/faq-questions',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/faq-questions'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/faq-questions/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/faq-questions/create"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/faq-questions/create',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/faq-questions/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/admin/faq-questions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category_id":4,"question":"suscipit","answer":"sint"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/faq-questions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_id": 4,
    "question": "suscipit",
    "answer": "sint"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://mamma-send.herokuapp.com/admin/faq-questions',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'category_id' => 4,
            'question' => 'suscipit',
            'answer' => 'sint',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/faq-questions'
payload = {
    "category_id": 4,
    "question": "suscipit",
    "answer": "sint"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/faq-questions/expedita" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/faq-questions/expedita"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/faq-questions/expedita',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/faq-questions/expedita'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/admin/faq-questions/laboriosam/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/faq-questions/laboriosam/edit"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/admin/faq-questions/laboriosam/edit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/faq-questions/laboriosam/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/admin/faq-questions/dignissimos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category_id":8,"question":"consequatur","answer":"et"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/faq-questions/dignissimos"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_id": 8,
    "question": "consequatur",
    "answer": "et"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'https://mamma-send.herokuapp.com/admin/faq-questions/dignissimos',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'category_id' => 8,
            'question' => 'consequatur',
            'answer' => 'et',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/faq-questions/dignissimos'
payload = {
    "category_id": 8,
    "question": "consequatur",
    "answer": "et"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()
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
    "https://mamma-send.herokuapp.com/admin/faq-questions/rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/admin/faq-questions/rerum"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'https://mamma-send.herokuapp.com/admin/faq-questions/rerum',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/admin/faq-questions/rerum'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
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
    -G "https://mamma-send.herokuapp.com/profile/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/profile/password"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://mamma-send.herokuapp.com/profile/password',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/profile/password'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
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
    "https://mamma-send.herokuapp.com/profile/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"password":"voluptatum"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/profile/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "voluptatum"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://mamma-send.herokuapp.com/profile/password',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'password' => 'voluptatum',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/profile/password'
payload = {
    "password": "voluptatum"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
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
    "https://mamma-send.herokuapp.com/profile/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"mollitia","email":"eve.orn@example.org"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/profile/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "mollitia",
    "email": "eve.orn@example.org"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://mamma-send.herokuapp.com/profile/profile',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'name' => 'mollitia',
            'email' => 'eve.orn@example.org',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/profile/profile'
payload = {
    "name": "mollitia",
    "email": "eve.orn@example.org"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
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
    "https://mamma-send.herokuapp.com/profile/profile/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/profile/profile/destroy"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://mamma-send.herokuapp.com/profile/profile/destroy',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/profile/profile/destroy'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()
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



