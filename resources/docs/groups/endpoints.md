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
    -d '{"title":"modi"}'

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
    "title": "modi"
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
            'title' => 'modi',
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
    "title": "modi"
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
    -G "https://mamma-send.herokuapp.com/api/v1/permissions/autem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/permissions/autem"
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
    'https://mamma-send.herokuapp.com/api/v1/permissions/autem',
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

url = 'https://mamma-send.herokuapp.com/api/v1/permissions/autem'
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
    "https://mamma-send.herokuapp.com/api/v1/permissions/repellat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"voluptatum"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/permissions/repellat"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "voluptatum"
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
    'https://mamma-send.herokuapp.com/api/v1/permissions/repellat',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'title' => 'voluptatum',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/permissions/repellat'
payload = {
    "title": "voluptatum"
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
    "https://mamma-send.herokuapp.com/api/v1/permissions/corrupti" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/permissions/corrupti"
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
    'https://mamma-send.herokuapp.com/api/v1/permissions/corrupti',
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

url = 'https://mamma-send.herokuapp.com/api/v1/permissions/corrupti'
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
    -d '{"title":"omnis","permissions":[15,2]}'

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
    "title": "omnis",
    "permissions": [
        15,
        2
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
            'title' => 'omnis',
            'permissions' => [
                15,
                2,
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
    "title": "omnis",
    "permissions": [
        15,
        2
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
    -G "https://mamma-send.herokuapp.com/api/v1/roles/voluptatibus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/roles/voluptatibus"
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
    'https://mamma-send.herokuapp.com/api/v1/roles/voluptatibus',
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

url = 'https://mamma-send.herokuapp.com/api/v1/roles/voluptatibus'
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
    "https://mamma-send.herokuapp.com/api/v1/roles/molestiae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"laboriosam","permissions":[2,1]}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/roles/molestiae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "laboriosam",
    "permissions": [
        2,
        1
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
    'https://mamma-send.herokuapp.com/api/v1/roles/molestiae',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'title' => 'laboriosam',
            'permissions' => [
                2,
                1,
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

url = 'https://mamma-send.herokuapp.com/api/v1/roles/molestiae'
payload = {
    "title": "laboriosam",
    "permissions": [
        2,
        1
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
    "https://mamma-send.herokuapp.com/api/v1/roles/provident" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/roles/provident"
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
    'https://mamma-send.herokuapp.com/api/v1/roles/provident',
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

url = 'https://mamma-send.herokuapp.com/api/v1/roles/provident'
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
    -d '{"name":"veritatis","email":"illo","password":"dolores","roles":[5,7]}'

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
    "name": "veritatis",
    "email": "illo",
    "password": "dolores",
    "roles": [
        5,
        7
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
            'name' => 'veritatis',
            'email' => 'illo',
            'password' => 'dolores',
            'roles' => [
                5,
                7,
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
    "name": "veritatis",
    "email": "illo",
    "password": "dolores",
    "roles": [
        5,
        7
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
    -G "https://mamma-send.herokuapp.com/api/v1/users/id" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/users/id"
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
    'https://mamma-send.herokuapp.com/api/v1/users/id',
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

url = 'https://mamma-send.herokuapp.com/api/v1/users/id'
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
    "https://mamma-send.herokuapp.com/api/v1/users/quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/users/quia"
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
    'https://mamma-send.herokuapp.com/api/v1/users/quia',
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

url = 'https://mamma-send.herokuapp.com/api/v1/users/quia'
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
    -d '{"street":"cupiditate","city":"omnis","state":"cum","zip_code":"ipsa"}'

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
    "street": "cupiditate",
    "city": "omnis",
    "state": "cum",
    "zip_code": "ipsa"
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
            'street' => 'cupiditate',
            'city' => 'omnis',
            'state' => 'cum',
            'zip_code' => 'ipsa',
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
    "street": "cupiditate",
    "city": "omnis",
    "state": "cum",
    "zip_code": "ipsa"
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
    -G "https://mamma-send.herokuapp.com/api/v1/addresses/explicabo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/addresses/explicabo"
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
    'https://mamma-send.herokuapp.com/api/v1/addresses/explicabo',
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

url = 'https://mamma-send.herokuapp.com/api/v1/addresses/explicabo'
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
    "https://mamma-send.herokuapp.com/api/v1/addresses/repellendus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"street":"recusandae","city":"sit","state":"quia","zip_code":"sequi"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/addresses/repellendus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "street": "recusandae",
    "city": "sit",
    "state": "quia",
    "zip_code": "sequi"
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
    'https://mamma-send.herokuapp.com/api/v1/addresses/repellendus',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'street' => 'recusandae',
            'city' => 'sit',
            'state' => 'quia',
            'zip_code' => 'sequi',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/addresses/repellendus'
payload = {
    "street": "recusandae",
    "city": "sit",
    "state": "quia",
    "zip_code": "sequi"
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
    "https://mamma-send.herokuapp.com/api/v1/addresses/officiis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/addresses/officiis"
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
    'https://mamma-send.herokuapp.com/api/v1/addresses/officiis',
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

url = 'https://mamma-send.herokuapp.com/api/v1/addresses/officiis'
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
    -d '{"rider_id":3}'

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
    "rider_id": 3
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
            'rider_id' => 3,
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
    "rider_id": 3
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
    -G "https://mamma-send.herokuapp.com/api/v1/rides/dolores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/rides/dolores"
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
    'https://mamma-send.herokuapp.com/api/v1/rides/dolores',
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

url = 'https://mamma-send.herokuapp.com/api/v1/rides/dolores'
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
    "https://mamma-send.herokuapp.com/api/v1/rides/ad" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"rider_id":1}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/rides/ad"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "rider_id": 1
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
    'https://mamma-send.herokuapp.com/api/v1/rides/ad',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'rider_id' => 1,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/rides/ad'
payload = {
    "rider_id": 1
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
    "https://mamma-send.herokuapp.com/api/v1/rides/necessitatibus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/rides/necessitatibus"
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
    'https://mamma-send.herokuapp.com/api/v1/rides/necessitatibus',
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

url = 'https://mamma-send.herokuapp.com/api/v1/rides/necessitatibus'
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
    -d '{"total_received":"officia","rider_received":"excepturi","office_received":"sit","user_id":16}'

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
    "total_received": "officia",
    "rider_received": "excepturi",
    "office_received": "sit",
    "user_id": 16
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
            'total_received' => 'officia',
            'rider_received' => 'excepturi',
            'office_received' => 'sit',
            'user_id' => 16,
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
    "total_received": "officia",
    "rider_received": "excepturi",
    "office_received": "sit",
    "user_id": 16
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
    -G "https://mamma-send.herokuapp.com/api/v1/payments/quo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/payments/quo"
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
    'https://mamma-send.herokuapp.com/api/v1/payments/quo',
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

url = 'https://mamma-send.herokuapp.com/api/v1/payments/quo'
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
    "https://mamma-send.herokuapp.com/api/v1/payments/quidem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"total_received":"ullam","rider_received":"illum","office_received":"debitis","user_id":2}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/payments/quidem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "total_received": "ullam",
    "rider_received": "illum",
    "office_received": "debitis",
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
    'https://mamma-send.herokuapp.com/api/v1/payments/quidem',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'total_received' => 'ullam',
            'rider_received' => 'illum',
            'office_received' => 'debitis',
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

url = 'https://mamma-send.herokuapp.com/api/v1/payments/quidem'
payload = {
    "total_received": "ullam",
    "rider_received": "illum",
    "office_received": "debitis",
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
    "https://mamma-send.herokuapp.com/api/v1/payments/dolorum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/payments/dolorum"
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
    'https://mamma-send.herokuapp.com/api/v1/payments/dolorum',
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

url = 'https://mamma-send.herokuapp.com/api/v1/payments/dolorum'
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
    -d '{"category":"aspernatur"}'

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
    "category": "aspernatur"
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
            'category' => 'aspernatur',
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
    "category": "aspernatur"
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
    -G "https://mamma-send.herokuapp.com/api/v1/faq-categories/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/faq-categories/et"
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
    'https://mamma-send.herokuapp.com/api/v1/faq-categories/et',
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

url = 'https://mamma-send.herokuapp.com/api/v1/faq-categories/et'
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
    "https://mamma-send.herokuapp.com/api/v1/faq-categories/perferendis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category":"nemo"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/faq-categories/perferendis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category": "nemo"
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
    'https://mamma-send.herokuapp.com/api/v1/faq-categories/perferendis',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'category' => 'nemo',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/faq-categories/perferendis'
payload = {
    "category": "nemo"
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
    "https://mamma-send.herokuapp.com/api/v1/faq-categories/vel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/faq-categories/vel"
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
    'https://mamma-send.herokuapp.com/api/v1/faq-categories/vel',
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

url = 'https://mamma-send.herokuapp.com/api/v1/faq-categories/vel'
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
    -d '{"category_id":12,"question":"ipsum","answer":"fugiat"}'

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
    "category_id": 12,
    "question": "ipsum",
    "answer": "fugiat"
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
            'category_id' => 12,
            'question' => 'ipsum',
            'answer' => 'fugiat',
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
    "category_id": 12,
    "question": "ipsum",
    "answer": "fugiat"
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
    -G "https://mamma-send.herokuapp.com/api/v1/faq-questions/eum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/faq-questions/eum"
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
    'https://mamma-send.herokuapp.com/api/v1/faq-questions/eum',
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

url = 'https://mamma-send.herokuapp.com/api/v1/faq-questions/eum'
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
    "https://mamma-send.herokuapp.com/api/v1/faq-questions/debitis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category_id":12,"question":"voluptas","answer":"rerum"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/faq-questions/debitis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_id": 12,
    "question": "voluptas",
    "answer": "rerum"
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
    'https://mamma-send.herokuapp.com/api/v1/faq-questions/debitis',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'category_id' => 12,
            'question' => 'voluptas',
            'answer' => 'rerum',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/api/v1/faq-questions/debitis'
payload = {
    "category_id": 12,
    "question": "voluptas",
    "answer": "rerum"
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
    "https://mamma-send.herokuapp.com/api/v1/faq-questions/necessitatibus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/api/v1/faq-questions/necessitatibus"
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
    'https://mamma-send.herokuapp.com/api/v1/faq-questions/necessitatibus',
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

url = 'https://mamma-send.herokuapp.com/api/v1/faq-questions/necessitatibus'
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
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
        <meta http-equiv="refresh" content="0;url='http://mamma-send.herokuapp.com'" />

        <title>Redirecting to http://mamma-send.herokuapp.com</title>
    </head>
    <body>
        Redirecting to <a href="http://mamma-send.herokuapp.com">http://mamma-send.herokuapp.com</a>.
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
    <meta name="csrf-token" content="Pebvzc2A2vMCK88tTEV4HhlKITCCwNDm6s5BhWaE">

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
                        <input type="hidden" name="_token" value="Pebvzc2A2vMCK88tTEV4HhlKITCCwNDm6s5BhWaE">
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
    <meta name="csrf-token" content="Pebvzc2A2vMCK88tTEV4HhlKITCCwNDm6s5BhWaE">

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
                        <input type="hidden" name="_token" value="Pebvzc2A2vMCK88tTEV4HhlKITCCwNDm6s5BhWaE">
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
    <meta name="csrf-token" content="Pebvzc2A2vMCK88tTEV4HhlKITCCwNDm6s5BhWaE">

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
                        <input type="hidden" name="_token" value="Pebvzc2A2vMCK88tTEV4HhlKITCCwNDm6s5BhWaE">
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
    -G "https://mamma-send.herokuapp.com/password/reset/voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/password/reset/voluptas"
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
    'https://mamma-send.herokuapp.com/password/reset/voluptas',
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

url = 'https://mamma-send.herokuapp.com/password/reset/voluptas'
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
    <meta name="csrf-token" content="Pebvzc2A2vMCK88tTEV4HhlKITCCwNDm6s5BhWaE">

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
                        <input type="hidden" name="_token" value="Pebvzc2A2vMCK88tTEV4HhlKITCCwNDm6s5BhWaE">
                        <input type="hidden" name="token" value="voluptas">

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
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
</form>


## permissions




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/permissions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/permissions"
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
    'https://mamma-send.herokuapp.com/permissions',
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

url = 'https://mamma-send.herokuapp.com/permissions'
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
<div id="execution-results-GETpermissions" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpermissions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpermissions"></code></pre>
</div>
<div id="execution-error-GETpermissions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpermissions"></code></pre>
</div>
<form id="form-GETpermissions" data-method="GET" data-path="permissions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpermissions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpermissions" onclick="tryItOut('GETpermissions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpermissions" onclick="cancelTryOut('GETpermissions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpermissions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>permissions</code></b>
</p>
</form>


## permissions/create




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/permissions/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/permissions/create"
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
    'https://mamma-send.herokuapp.com/permissions/create',
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

url = 'https://mamma-send.herokuapp.com/permissions/create'
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
<div id="execution-results-GETpermissions-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpermissions-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpermissions-create"></code></pre>
</div>
<div id="execution-error-GETpermissions-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpermissions-create"></code></pre>
</div>
<form id="form-GETpermissions-create" data-method="GET" data-path="permissions/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpermissions-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpermissions-create" onclick="tryItOut('GETpermissions-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpermissions-create" onclick="cancelTryOut('GETpermissions-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpermissions-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>permissions/create</code></b>
</p>
</form>


## permissions




> Example request:

```bash
curl -X POST \
    "https://mamma-send.herokuapp.com/permissions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"dolor"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/permissions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "dolor"
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
    'https://mamma-send.herokuapp.com/permissions',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'title' => 'dolor',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/permissions'
payload = {
    "title": "dolor"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```


<div id="execution-results-POSTpermissions" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpermissions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpermissions"></code></pre>
</div>
<div id="execution-error-POSTpermissions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpermissions"></code></pre>
</div>
<form id="form-POSTpermissions" data-method="POST" data-path="permissions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpermissions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpermissions" onclick="tryItOut('POSTpermissions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpermissions" onclick="cancelTryOut('POSTpermissions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpermissions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>permissions</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTpermissions" data-component="body" required  hidden>
<br>
</p>

</form>


## permissions/{permission}




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/permissions/necessitatibus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/permissions/necessitatibus"
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
    'https://mamma-send.herokuapp.com/permissions/necessitatibus',
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

url = 'https://mamma-send.herokuapp.com/permissions/necessitatibus'
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
<div id="execution-results-GETpermissions--permission-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpermissions--permission-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpermissions--permission-"></code></pre>
</div>
<div id="execution-error-GETpermissions--permission-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpermissions--permission-"></code></pre>
</div>
<form id="form-GETpermissions--permission-" data-method="GET" data-path="permissions/{permission}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpermissions--permission-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpermissions--permission-" onclick="tryItOut('GETpermissions--permission-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpermissions--permission-" onclick="cancelTryOut('GETpermissions--permission-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpermissions--permission-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>permissions/{permission}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>permission</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="permission" data-endpoint="GETpermissions--permission-" data-component="url" required  hidden>
<br>
</p>
</form>


## permissions/{permission}/edit




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/permissions/ducimus/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/permissions/ducimus/edit"
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
    'https://mamma-send.herokuapp.com/permissions/ducimus/edit',
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

url = 'https://mamma-send.herokuapp.com/permissions/ducimus/edit'
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
<div id="execution-results-GETpermissions--permission--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpermissions--permission--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpermissions--permission--edit"></code></pre>
</div>
<div id="execution-error-GETpermissions--permission--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpermissions--permission--edit"></code></pre>
</div>
<form id="form-GETpermissions--permission--edit" data-method="GET" data-path="permissions/{permission}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpermissions--permission--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpermissions--permission--edit" onclick="tryItOut('GETpermissions--permission--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpermissions--permission--edit" onclick="cancelTryOut('GETpermissions--permission--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpermissions--permission--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>permissions/{permission}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>permission</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="permission" data-endpoint="GETpermissions--permission--edit" data-component="url" required  hidden>
<br>
</p>
</form>


## permissions/{permission}




> Example request:

```bash
curl -X PUT \
    "https://mamma-send.herokuapp.com/permissions/ratione" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"nam"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/permissions/ratione"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "nam"
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
    'https://mamma-send.herokuapp.com/permissions/ratione',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'title' => 'nam',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/permissions/ratione'
payload = {
    "title": "nam"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()
```


<div id="execution-results-PUTpermissions--permission-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTpermissions--permission-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTpermissions--permission-"></code></pre>
</div>
<div id="execution-error-PUTpermissions--permission-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTpermissions--permission-"></code></pre>
</div>
<form id="form-PUTpermissions--permission-" data-method="PUT" data-path="permissions/{permission}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTpermissions--permission-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTpermissions--permission-" onclick="tryItOut('PUTpermissions--permission-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTpermissions--permission-" onclick="cancelTryOut('PUTpermissions--permission-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTpermissions--permission-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>permissions/{permission}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>permissions/{permission}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>permission</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="permission" data-endpoint="PUTpermissions--permission-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="PUTpermissions--permission-" data-component="body" required  hidden>
<br>
</p>

</form>


## permissions/{permission}




> Example request:

```bash
curl -X DELETE \
    "https://mamma-send.herokuapp.com/permissions/sequi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/permissions/sequi"
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
    'https://mamma-send.herokuapp.com/permissions/sequi',
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

url = 'https://mamma-send.herokuapp.com/permissions/sequi'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
```


<div id="execution-results-DELETEpermissions--permission-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEpermissions--permission-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEpermissions--permission-"></code></pre>
</div>
<div id="execution-error-DELETEpermissions--permission-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEpermissions--permission-"></code></pre>
</div>
<form id="form-DELETEpermissions--permission-" data-method="DELETE" data-path="permissions/{permission}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEpermissions--permission-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEpermissions--permission-" onclick="tryItOut('DELETEpermissions--permission-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEpermissions--permission-" onclick="cancelTryOut('DELETEpermissions--permission-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEpermissions--permission-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>permissions/{permission}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>permission</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="permission" data-endpoint="DELETEpermissions--permission-" data-component="url" required  hidden>
<br>
</p>
</form>


## roles




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/roles"
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
    'https://mamma-send.herokuapp.com/roles',
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

url = 'https://mamma-send.herokuapp.com/roles'
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
<div id="execution-results-GETroles" hidden>
    <blockquote>Received response<span id="execution-response-status-GETroles"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETroles"></code></pre>
</div>
<div id="execution-error-GETroles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETroles"></code></pre>
</div>
<form id="form-GETroles" data-method="GET" data-path="roles" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETroles', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETroles" onclick="tryItOut('GETroles');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETroles" onclick="cancelTryOut('GETroles');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETroles" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>roles</code></b>
</p>
</form>


## roles/create




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/roles/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/roles/create"
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
    'https://mamma-send.herokuapp.com/roles/create',
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

url = 'https://mamma-send.herokuapp.com/roles/create'
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
<div id="execution-results-GETroles-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETroles-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETroles-create"></code></pre>
</div>
<div id="execution-error-GETroles-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETroles-create"></code></pre>
</div>
<form id="form-GETroles-create" data-method="GET" data-path="roles/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETroles-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETroles-create" onclick="tryItOut('GETroles-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETroles-create" onclick="cancelTryOut('GETroles-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETroles-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>roles/create</code></b>
</p>
</form>


## roles




> Example request:

```bash
curl -X POST \
    "https://mamma-send.herokuapp.com/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"ut","permissions":[10,12]}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "ut",
    "permissions": [
        10,
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
    'https://mamma-send.herokuapp.com/roles',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'title' => 'ut',
            'permissions' => [
                10,
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

url = 'https://mamma-send.herokuapp.com/roles'
payload = {
    "title": "ut",
    "permissions": [
        10,
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


<div id="execution-results-POSTroles" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTroles"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTroles"></code></pre>
</div>
<div id="execution-error-POSTroles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTroles"></code></pre>
</div>
<form id="form-POSTroles" data-method="POST" data-path="roles" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTroles', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTroles" onclick="tryItOut('POSTroles');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTroles" onclick="cancelTryOut('POSTroles');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTroles" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>roles</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTroles" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>permissions</code></b>&nbsp;&nbsp;<small>integer[]</small>     <i>optional</i> &nbsp;
<input type="number" name="permissions.0" data-endpoint="POSTroles" data-component="body"  hidden>
<input type="number" name="permissions.1" data-endpoint="POSTroles" data-component="body" hidden>
<br>
</p>

</form>


## roles/{role}




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/roles/corrupti" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/roles/corrupti"
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
    'https://mamma-send.herokuapp.com/roles/corrupti',
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

url = 'https://mamma-send.herokuapp.com/roles/corrupti'
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
<div id="execution-results-GETroles--role-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETroles--role-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETroles--role-"></code></pre>
</div>
<div id="execution-error-GETroles--role-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETroles--role-"></code></pre>
</div>
<form id="form-GETroles--role-" data-method="GET" data-path="roles/{role}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETroles--role-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETroles--role-" onclick="tryItOut('GETroles--role-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETroles--role-" onclick="cancelTryOut('GETroles--role-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETroles--role-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>roles/{role}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>role</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="role" data-endpoint="GETroles--role-" data-component="url" required  hidden>
<br>
</p>
</form>


## roles/{role}/edit




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/roles/iusto/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/roles/iusto/edit"
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
    'https://mamma-send.herokuapp.com/roles/iusto/edit',
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

url = 'https://mamma-send.herokuapp.com/roles/iusto/edit'
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
<div id="execution-results-GETroles--role--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETroles--role--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETroles--role--edit"></code></pre>
</div>
<div id="execution-error-GETroles--role--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETroles--role--edit"></code></pre>
</div>
<form id="form-GETroles--role--edit" data-method="GET" data-path="roles/{role}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETroles--role--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETroles--role--edit" onclick="tryItOut('GETroles--role--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETroles--role--edit" onclick="cancelTryOut('GETroles--role--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETroles--role--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>roles/{role}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>role</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="role" data-endpoint="GETroles--role--edit" data-component="url" required  hidden>
<br>
</p>
</form>


## roles/{role}




> Example request:

```bash
curl -X PUT \
    "https://mamma-send.herokuapp.com/roles/nulla" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"sed","permissions":[4,10]}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/roles/nulla"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "sed",
    "permissions": [
        4,
        10
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
    'https://mamma-send.herokuapp.com/roles/nulla',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'title' => 'sed',
            'permissions' => [
                4,
                10,
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

url = 'https://mamma-send.herokuapp.com/roles/nulla'
payload = {
    "title": "sed",
    "permissions": [
        4,
        10
    ]
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()
```


<div id="execution-results-PUTroles--role-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTroles--role-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTroles--role-"></code></pre>
</div>
<div id="execution-error-PUTroles--role-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTroles--role-"></code></pre>
</div>
<form id="form-PUTroles--role-" data-method="PUT" data-path="roles/{role}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTroles--role-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTroles--role-" onclick="tryItOut('PUTroles--role-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTroles--role-" onclick="cancelTryOut('PUTroles--role-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTroles--role-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>roles/{role}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>roles/{role}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>role</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="role" data-endpoint="PUTroles--role-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="PUTroles--role-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>permissions</code></b>&nbsp;&nbsp;<small>integer[]</small>     <i>optional</i> &nbsp;
<input type="number" name="permissions.0" data-endpoint="PUTroles--role-" data-component="body"  hidden>
<input type="number" name="permissions.1" data-endpoint="PUTroles--role-" data-component="body" hidden>
<br>
</p>

</form>


## roles/{role}




> Example request:

```bash
curl -X DELETE \
    "https://mamma-send.herokuapp.com/roles/minus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/roles/minus"
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
    'https://mamma-send.herokuapp.com/roles/minus',
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

url = 'https://mamma-send.herokuapp.com/roles/minus'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
```


<div id="execution-results-DELETEroles--role-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEroles--role-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEroles--role-"></code></pre>
</div>
<div id="execution-error-DELETEroles--role-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEroles--role-"></code></pre>
</div>
<form id="form-DELETEroles--role-" data-method="DELETE" data-path="roles/{role}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEroles--role-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEroles--role-" onclick="tryItOut('DELETEroles--role-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEroles--role-" onclick="cancelTryOut('DELETEroles--role-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEroles--role-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>roles/{role}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>role</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="role" data-endpoint="DELETEroles--role-" data-component="url" required  hidden>
<br>
</p>
</form>


## users




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/users"
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
    'https://mamma-send.herokuapp.com/users',
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

url = 'https://mamma-send.herokuapp.com/users'
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
<div id="execution-results-GETusers" hidden>
    <blockquote>Received response<span id="execution-response-status-GETusers"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETusers"></code></pre>
</div>
<div id="execution-error-GETusers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETusers"></code></pre>
</div>
<form id="form-GETusers" data-method="GET" data-path="users" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETusers', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETusers" onclick="tryItOut('GETusers');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETusers" onclick="cancelTryOut('GETusers');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETusers" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>users</code></b>
</p>
</form>


## users/create




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/users/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/users/create"
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
    'https://mamma-send.herokuapp.com/users/create',
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

url = 'https://mamma-send.herokuapp.com/users/create'
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
<div id="execution-results-GETusers-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETusers-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETusers-create"></code></pre>
</div>
<div id="execution-error-GETusers-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETusers-create"></code></pre>
</div>
<form id="form-GETusers-create" data-method="GET" data-path="users/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETusers-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETusers-create" onclick="tryItOut('GETusers-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETusers-create" onclick="cancelTryOut('GETusers-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETusers-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>users/create</code></b>
</p>
</form>


## users




> Example request:

```bash
curl -X POST \
    "https://mamma-send.herokuapp.com/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"consequatur","email":"quae","password":"placeat","roles":[11,6]}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "consequatur",
    "email": "quae",
    "password": "placeat",
    "roles": [
        11,
        6
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
    'https://mamma-send.herokuapp.com/users',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'name' => 'consequatur',
            'email' => 'quae',
            'password' => 'placeat',
            'roles' => [
                11,
                6,
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

url = 'https://mamma-send.herokuapp.com/users'
payload = {
    "name": "consequatur",
    "email": "quae",
    "password": "placeat",
    "roles": [
        11,
        6
    ]
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```


<div id="execution-results-POSTusers" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTusers"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTusers"></code></pre>
</div>
<div id="execution-error-POSTusers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTusers"></code></pre>
</div>
<form id="form-POSTusers" data-method="POST" data-path="users" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTusers', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTusers" onclick="tryItOut('POSTusers');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTusers" onclick="cancelTryOut('POSTusers');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTusers" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>users</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTusers" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTusers" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTusers" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>roles</code></b>&nbsp;&nbsp;<small>integer[]</small>     <i>optional</i> &nbsp;
<input type="number" name="roles.0" data-endpoint="POSTusers" data-component="body"  hidden>
<input type="number" name="roles.1" data-endpoint="POSTusers" data-component="body" hidden>
<br>
</p>

</form>


## users/{user}




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/users/dolorem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/users/dolorem"
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
    'https://mamma-send.herokuapp.com/users/dolorem',
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

url = 'https://mamma-send.herokuapp.com/users/dolorem'
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
<div id="execution-results-GETusers--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETusers--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETusers--user-"></code></pre>
</div>
<div id="execution-error-GETusers--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETusers--user-"></code></pre>
</div>
<form id="form-GETusers--user-" data-method="GET" data-path="users/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETusers--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETusers--user-" onclick="tryItOut('GETusers--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETusers--user-" onclick="cancelTryOut('GETusers--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETusers--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>users/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="GETusers--user-" data-component="url" required  hidden>
<br>
</p>
</form>


## users/{user}/edit




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/users/ut/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/users/ut/edit"
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
    'https://mamma-send.herokuapp.com/users/ut/edit',
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

url = 'https://mamma-send.herokuapp.com/users/ut/edit'
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
<div id="execution-results-GETusers--user--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETusers--user--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETusers--user--edit"></code></pre>
</div>
<div id="execution-error-GETusers--user--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETusers--user--edit"></code></pre>
</div>
<form id="form-GETusers--user--edit" data-method="GET" data-path="users/{user}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETusers--user--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETusers--user--edit" onclick="tryItOut('GETusers--user--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETusers--user--edit" onclick="cancelTryOut('GETusers--user--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETusers--user--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>users/{user}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="GETusers--user--edit" data-component="url" required  hidden>
<br>
</p>
</form>


## users/{user}




> Example request:

```bash
curl -X DELETE \
    "https://mamma-send.herokuapp.com/users/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/users/est"
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
    'https://mamma-send.herokuapp.com/users/est',
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

url = 'https://mamma-send.herokuapp.com/users/est'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
```


<div id="execution-results-DELETEusers--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEusers--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEusers--user-"></code></pre>
</div>
<div id="execution-error-DELETEusers--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEusers--user-"></code></pre>
</div>
<form id="form-DELETEusers--user-" data-method="DELETE" data-path="users/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEusers--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEusers--user-" onclick="tryItOut('DELETEusers--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEusers--user-" onclick="cancelTryOut('DELETEusers--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEusers--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>users/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="DELETEusers--user-" data-component="url" required  hidden>
<br>
</p>
</form>


## addresses




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/addresses"
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
    'https://mamma-send.herokuapp.com/addresses',
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

url = 'https://mamma-send.herokuapp.com/addresses'
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
<div id="execution-results-GETaddresses" hidden>
    <blockquote>Received response<span id="execution-response-status-GETaddresses"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETaddresses"></code></pre>
</div>
<div id="execution-error-GETaddresses" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETaddresses"></code></pre>
</div>
<form id="form-GETaddresses" data-method="GET" data-path="addresses" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETaddresses', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETaddresses" onclick="tryItOut('GETaddresses');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETaddresses" onclick="cancelTryOut('GETaddresses');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETaddresses" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>addresses</code></b>
</p>
</form>


## addresses/create




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/addresses/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/addresses/create"
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
    'https://mamma-send.herokuapp.com/addresses/create',
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

url = 'https://mamma-send.herokuapp.com/addresses/create'
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
<div id="execution-results-GETaddresses-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETaddresses-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETaddresses-create"></code></pre>
</div>
<div id="execution-error-GETaddresses-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETaddresses-create"></code></pre>
</div>
<form id="form-GETaddresses-create" data-method="GET" data-path="addresses/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETaddresses-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETaddresses-create" onclick="tryItOut('GETaddresses-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETaddresses-create" onclick="cancelTryOut('GETaddresses-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETaddresses-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>addresses/create</code></b>
</p>
</form>


## addresses




> Example request:

```bash
curl -X POST \
    "https://mamma-send.herokuapp.com/addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"street":"inventore","city":"distinctio","state":"ex","zip_code":"fugiat"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/addresses"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "street": "inventore",
    "city": "distinctio",
    "state": "ex",
    "zip_code": "fugiat"
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
    'https://mamma-send.herokuapp.com/addresses',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'street' => 'inventore',
            'city' => 'distinctio',
            'state' => 'ex',
            'zip_code' => 'fugiat',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/addresses'
payload = {
    "street": "inventore",
    "city": "distinctio",
    "state": "ex",
    "zip_code": "fugiat"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```


<div id="execution-results-POSTaddresses" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTaddresses"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTaddresses"></code></pre>
</div>
<div id="execution-error-POSTaddresses" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTaddresses"></code></pre>
</div>
<form id="form-POSTaddresses" data-method="POST" data-path="addresses" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTaddresses', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTaddresses" onclick="tryItOut('POSTaddresses');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTaddresses" onclick="cancelTryOut('POSTaddresses');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTaddresses" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>addresses</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>street</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="street" data-endpoint="POSTaddresses" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>city</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="city" data-endpoint="POSTaddresses" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>state</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="state" data-endpoint="POSTaddresses" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>zip_code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="zip_code" data-endpoint="POSTaddresses" data-component="body" required  hidden>
<br>
</p>

</form>


## addresses/{address}




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/addresses/eum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/addresses/eum"
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
    'https://mamma-send.herokuapp.com/addresses/eum',
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

url = 'https://mamma-send.herokuapp.com/addresses/eum'
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
<div id="execution-results-GETaddresses--address-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETaddresses--address-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETaddresses--address-"></code></pre>
</div>
<div id="execution-error-GETaddresses--address-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETaddresses--address-"></code></pre>
</div>
<form id="form-GETaddresses--address-" data-method="GET" data-path="addresses/{address}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETaddresses--address-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETaddresses--address-" onclick="tryItOut('GETaddresses--address-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETaddresses--address-" onclick="cancelTryOut('GETaddresses--address-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETaddresses--address-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>addresses/{address}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address" data-endpoint="GETaddresses--address-" data-component="url" required  hidden>
<br>
</p>
</form>


## addresses/{address}/edit




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/addresses/iste/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/addresses/iste/edit"
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
    'https://mamma-send.herokuapp.com/addresses/iste/edit',
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

url = 'https://mamma-send.herokuapp.com/addresses/iste/edit'
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
<div id="execution-results-GETaddresses--address--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETaddresses--address--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETaddresses--address--edit"></code></pre>
</div>
<div id="execution-error-GETaddresses--address--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETaddresses--address--edit"></code></pre>
</div>
<form id="form-GETaddresses--address--edit" data-method="GET" data-path="addresses/{address}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETaddresses--address--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETaddresses--address--edit" onclick="tryItOut('GETaddresses--address--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETaddresses--address--edit" onclick="cancelTryOut('GETaddresses--address--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETaddresses--address--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>addresses/{address}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address" data-endpoint="GETaddresses--address--edit" data-component="url" required  hidden>
<br>
</p>
</form>


## addresses/{address}




> Example request:

```bash
curl -X PUT \
    "https://mamma-send.herokuapp.com/addresses/magni" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"street":"magni","city":"reiciendis","state":"assumenda","zip_code":"deserunt"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/addresses/magni"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "street": "magni",
    "city": "reiciendis",
    "state": "assumenda",
    "zip_code": "deserunt"
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
    'https://mamma-send.herokuapp.com/addresses/magni',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'street' => 'magni',
            'city' => 'reiciendis',
            'state' => 'assumenda',
            'zip_code' => 'deserunt',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/addresses/magni'
payload = {
    "street": "magni",
    "city": "reiciendis",
    "state": "assumenda",
    "zip_code": "deserunt"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()
```


<div id="execution-results-PUTaddresses--address-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTaddresses--address-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTaddresses--address-"></code></pre>
</div>
<div id="execution-error-PUTaddresses--address-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTaddresses--address-"></code></pre>
</div>
<form id="form-PUTaddresses--address-" data-method="PUT" data-path="addresses/{address}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTaddresses--address-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTaddresses--address-" onclick="tryItOut('PUTaddresses--address-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTaddresses--address-" onclick="cancelTryOut('PUTaddresses--address-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTaddresses--address-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>addresses/{address}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>addresses/{address}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address" data-endpoint="PUTaddresses--address-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>street</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="street" data-endpoint="PUTaddresses--address-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>city</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="city" data-endpoint="PUTaddresses--address-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>state</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="state" data-endpoint="PUTaddresses--address-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>zip_code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="zip_code" data-endpoint="PUTaddresses--address-" data-component="body" required  hidden>
<br>
</p>

</form>


## addresses/{address}




> Example request:

```bash
curl -X DELETE \
    "https://mamma-send.herokuapp.com/addresses/assumenda" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/addresses/assumenda"
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
    'https://mamma-send.herokuapp.com/addresses/assumenda',
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

url = 'https://mamma-send.herokuapp.com/addresses/assumenda'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
```


<div id="execution-results-DELETEaddresses--address-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEaddresses--address-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEaddresses--address-"></code></pre>
</div>
<div id="execution-error-DELETEaddresses--address-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEaddresses--address-"></code></pre>
</div>
<form id="form-DELETEaddresses--address-" data-method="DELETE" data-path="addresses/{address}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEaddresses--address-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEaddresses--address-" onclick="tryItOut('DELETEaddresses--address-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEaddresses--address-" onclick="cancelTryOut('DELETEaddresses--address-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEaddresses--address-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>addresses/{address}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address" data-endpoint="DELETEaddresses--address-" data-component="url" required  hidden>
<br>
</p>
</form>


## rides




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/rides" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/rides"
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
    'https://mamma-send.herokuapp.com/rides',
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

url = 'https://mamma-send.herokuapp.com/rides'
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
<div id="execution-results-GETrides" hidden>
    <blockquote>Received response<span id="execution-response-status-GETrides"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETrides"></code></pre>
</div>
<div id="execution-error-GETrides" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETrides"></code></pre>
</div>
<form id="form-GETrides" data-method="GET" data-path="rides" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETrides', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETrides" onclick="tryItOut('GETrides');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETrides" onclick="cancelTryOut('GETrides');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETrides" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>rides</code></b>
</p>
</form>


## rides/create




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/rides/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/rides/create"
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
    'https://mamma-send.herokuapp.com/rides/create',
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

url = 'https://mamma-send.herokuapp.com/rides/create'
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
<div id="execution-results-GETrides-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETrides-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETrides-create"></code></pre>
</div>
<div id="execution-error-GETrides-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETrides-create"></code></pre>
</div>
<form id="form-GETrides-create" data-method="GET" data-path="rides/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETrides-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETrides-create" onclick="tryItOut('GETrides-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETrides-create" onclick="cancelTryOut('GETrides-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETrides-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>rides/create</code></b>
</p>
</form>


## rides




> Example request:

```bash
curl -X POST \
    "https://mamma-send.herokuapp.com/rides" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"rider_id":2}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/rides"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "rider_id": 2
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
    'https://mamma-send.herokuapp.com/rides',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'rider_id' => 2,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/rides'
payload = {
    "rider_id": 2
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```


<div id="execution-results-POSTrides" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTrides"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTrides"></code></pre>
</div>
<div id="execution-error-POSTrides" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTrides"></code></pre>
</div>
<form id="form-POSTrides" data-method="POST" data-path="rides" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTrides', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTrides" onclick="tryItOut('POSTrides');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTrides" onclick="cancelTryOut('POSTrides');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTrides" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>rides</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>rider_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="rider_id" data-endpoint="POSTrides" data-component="body" required  hidden>
<br>
</p>

</form>


## rides/{ride}




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/rides/doloribus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/rides/doloribus"
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
    'https://mamma-send.herokuapp.com/rides/doloribus',
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

url = 'https://mamma-send.herokuapp.com/rides/doloribus'
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
<div id="execution-results-GETrides--ride-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETrides--ride-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETrides--ride-"></code></pre>
</div>
<div id="execution-error-GETrides--ride-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETrides--ride-"></code></pre>
</div>
<form id="form-GETrides--ride-" data-method="GET" data-path="rides/{ride}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETrides--ride-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETrides--ride-" onclick="tryItOut('GETrides--ride-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETrides--ride-" onclick="cancelTryOut('GETrides--ride-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETrides--ride-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>rides/{ride}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>ride</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ride" data-endpoint="GETrides--ride-" data-component="url" required  hidden>
<br>
</p>
</form>


## rides/{ride}/edit




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/rides/facilis/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/rides/facilis/edit"
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
    'https://mamma-send.herokuapp.com/rides/facilis/edit',
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

url = 'https://mamma-send.herokuapp.com/rides/facilis/edit'
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
<div id="execution-results-GETrides--ride--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETrides--ride--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETrides--ride--edit"></code></pre>
</div>
<div id="execution-error-GETrides--ride--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETrides--ride--edit"></code></pre>
</div>
<form id="form-GETrides--ride--edit" data-method="GET" data-path="rides/{ride}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETrides--ride--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETrides--ride--edit" onclick="tryItOut('GETrides--ride--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETrides--ride--edit" onclick="cancelTryOut('GETrides--ride--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETrides--ride--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>rides/{ride}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>ride</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ride" data-endpoint="GETrides--ride--edit" data-component="url" required  hidden>
<br>
</p>
</form>


## rides/{ride}




> Example request:

```bash
curl -X PUT \
    "https://mamma-send.herokuapp.com/rides/similique" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"rider_id":15}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/rides/similique"
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

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'https://mamma-send.herokuapp.com/rides/similique',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'rider_id' => 15,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/rides/similique'
payload = {
    "rider_id": 15
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()
```


<div id="execution-results-PUTrides--ride-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTrides--ride-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTrides--ride-"></code></pre>
</div>
<div id="execution-error-PUTrides--ride-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTrides--ride-"></code></pre>
</div>
<form id="form-PUTrides--ride-" data-method="PUT" data-path="rides/{ride}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTrides--ride-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTrides--ride-" onclick="tryItOut('PUTrides--ride-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTrides--ride-" onclick="cancelTryOut('PUTrides--ride-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTrides--ride-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>rides/{ride}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>rides/{ride}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>ride</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ride" data-endpoint="PUTrides--ride-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>rider_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="rider_id" data-endpoint="PUTrides--ride-" data-component="body" required  hidden>
<br>
</p>

</form>


## rides/{ride}




> Example request:

```bash
curl -X DELETE \
    "https://mamma-send.herokuapp.com/rides/iure" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/rides/iure"
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
    'https://mamma-send.herokuapp.com/rides/iure',
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

url = 'https://mamma-send.herokuapp.com/rides/iure'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
```


<div id="execution-results-DELETErides--ride-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETErides--ride-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETErides--ride-"></code></pre>
</div>
<div id="execution-error-DELETErides--ride-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETErides--ride-"></code></pre>
</div>
<form id="form-DELETErides--ride-" data-method="DELETE" data-path="rides/{ride}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETErides--ride-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETErides--ride-" onclick="tryItOut('DELETErides--ride-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETErides--ride-" onclick="cancelTryOut('DELETErides--ride-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETErides--ride-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>rides/{ride}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>ride</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ride" data-endpoint="DELETErides--ride-" data-component="url" required  hidden>
<br>
</p>
</form>


## payments




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/payments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/payments"
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
    'https://mamma-send.herokuapp.com/payments',
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

url = 'https://mamma-send.herokuapp.com/payments'
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
<div id="execution-results-GETpayments" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpayments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpayments"></code></pre>
</div>
<div id="execution-error-GETpayments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpayments"></code></pre>
</div>
<form id="form-GETpayments" data-method="GET" data-path="payments" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpayments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpayments" onclick="tryItOut('GETpayments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpayments" onclick="cancelTryOut('GETpayments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpayments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>payments</code></b>
</p>
</form>


## payments/create




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/payments/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/payments/create"
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
    'https://mamma-send.herokuapp.com/payments/create',
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

url = 'https://mamma-send.herokuapp.com/payments/create'
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
<div id="execution-results-GETpayments-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpayments-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpayments-create"></code></pre>
</div>
<div id="execution-error-GETpayments-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpayments-create"></code></pre>
</div>
<form id="form-GETpayments-create" data-method="GET" data-path="payments/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpayments-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpayments-create" onclick="tryItOut('GETpayments-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpayments-create" onclick="cancelTryOut('GETpayments-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpayments-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>payments/create</code></b>
</p>
</form>


## payments




> Example request:

```bash
curl -X POST \
    "https://mamma-send.herokuapp.com/payments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"total_received":"labore","rider_received":"dolore","office_received":"vero","user_id":20}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/payments"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "total_received": "labore",
    "rider_received": "dolore",
    "office_received": "vero",
    "user_id": 20
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
    'https://mamma-send.herokuapp.com/payments',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'total_received' => 'labore',
            'rider_received' => 'dolore',
            'office_received' => 'vero',
            'user_id' => 20,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/payments'
payload = {
    "total_received": "labore",
    "rider_received": "dolore",
    "office_received": "vero",
    "user_id": 20
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```


<div id="execution-results-POSTpayments" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpayments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpayments"></code></pre>
</div>
<div id="execution-error-POSTpayments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpayments"></code></pre>
</div>
<form id="form-POSTpayments" data-method="POST" data-path="payments" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpayments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpayments" onclick="tryItOut('POSTpayments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpayments" onclick="cancelTryOut('POSTpayments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpayments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>payments</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>total_received</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="total_received" data-endpoint="POSTpayments" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>rider_received</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="rider_received" data-endpoint="POSTpayments" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>office_received</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="office_received" data-endpoint="POSTpayments" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="POSTpayments" data-component="body" required  hidden>
<br>
</p>

</form>


## payments/{payment}




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/payments/reiciendis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/payments/reiciendis"
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
    'https://mamma-send.herokuapp.com/payments/reiciendis',
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

url = 'https://mamma-send.herokuapp.com/payments/reiciendis'
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
<div id="execution-results-GETpayments--payment-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpayments--payment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpayments--payment-"></code></pre>
</div>
<div id="execution-error-GETpayments--payment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpayments--payment-"></code></pre>
</div>
<form id="form-GETpayments--payment-" data-method="GET" data-path="payments/{payment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpayments--payment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpayments--payment-" onclick="tryItOut('GETpayments--payment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpayments--payment-" onclick="cancelTryOut('GETpayments--payment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpayments--payment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>payments/{payment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>payment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="payment" data-endpoint="GETpayments--payment-" data-component="url" required  hidden>
<br>
</p>
</form>


## payments/{payment}/edit




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/payments/consectetur/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/payments/consectetur/edit"
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
    'https://mamma-send.herokuapp.com/payments/consectetur/edit',
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

url = 'https://mamma-send.herokuapp.com/payments/consectetur/edit'
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
<div id="execution-results-GETpayments--payment--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpayments--payment--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpayments--payment--edit"></code></pre>
</div>
<div id="execution-error-GETpayments--payment--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpayments--payment--edit"></code></pre>
</div>
<form id="form-GETpayments--payment--edit" data-method="GET" data-path="payments/{payment}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpayments--payment--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpayments--payment--edit" onclick="tryItOut('GETpayments--payment--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpayments--payment--edit" onclick="cancelTryOut('GETpayments--payment--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpayments--payment--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>payments/{payment}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>payment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="payment" data-endpoint="GETpayments--payment--edit" data-component="url" required  hidden>
<br>
</p>
</form>


## payments/{payment}




> Example request:

```bash
curl -X PUT \
    "https://mamma-send.herokuapp.com/payments/modi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"total_received":"velit","rider_received":"est","office_received":"voluptas","user_id":10}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/payments/modi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "total_received": "velit",
    "rider_received": "est",
    "office_received": "voluptas",
    "user_id": 10
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
    'https://mamma-send.herokuapp.com/payments/modi',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'total_received' => 'velit',
            'rider_received' => 'est',
            'office_received' => 'voluptas',
            'user_id' => 10,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/payments/modi'
payload = {
    "total_received": "velit",
    "rider_received": "est",
    "office_received": "voluptas",
    "user_id": 10
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()
```


<div id="execution-results-PUTpayments--payment-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTpayments--payment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTpayments--payment-"></code></pre>
</div>
<div id="execution-error-PUTpayments--payment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTpayments--payment-"></code></pre>
</div>
<form id="form-PUTpayments--payment-" data-method="PUT" data-path="payments/{payment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTpayments--payment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTpayments--payment-" onclick="tryItOut('PUTpayments--payment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTpayments--payment-" onclick="cancelTryOut('PUTpayments--payment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTpayments--payment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>payments/{payment}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>payments/{payment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>payment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="payment" data-endpoint="PUTpayments--payment-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>total_received</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="total_received" data-endpoint="PUTpayments--payment-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>rider_received</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="rider_received" data-endpoint="PUTpayments--payment-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>office_received</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="office_received" data-endpoint="PUTpayments--payment-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="PUTpayments--payment-" data-component="body" required  hidden>
<br>
</p>

</form>


## payments/{payment}




> Example request:

```bash
curl -X DELETE \
    "https://mamma-send.herokuapp.com/payments/voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/payments/voluptatem"
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
    'https://mamma-send.herokuapp.com/payments/voluptatem',
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

url = 'https://mamma-send.herokuapp.com/payments/voluptatem'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
```


<div id="execution-results-DELETEpayments--payment-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEpayments--payment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEpayments--payment-"></code></pre>
</div>
<div id="execution-error-DELETEpayments--payment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEpayments--payment-"></code></pre>
</div>
<form id="form-DELETEpayments--payment-" data-method="DELETE" data-path="payments/{payment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEpayments--payment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEpayments--payment-" onclick="tryItOut('DELETEpayments--payment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEpayments--payment-" onclick="cancelTryOut('DELETEpayments--payment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEpayments--payment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>payments/{payment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>payment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="payment" data-endpoint="DELETEpayments--payment-" data-component="url" required  hidden>
<br>
</p>
</form>


## faq-categories




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/faq-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/faq-categories"
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
    'https://mamma-send.herokuapp.com/faq-categories',
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

url = 'https://mamma-send.herokuapp.com/faq-categories'
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
<div id="execution-results-GETfaq-categories" hidden>
    <blockquote>Received response<span id="execution-response-status-GETfaq-categories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETfaq-categories"></code></pre>
</div>
<div id="execution-error-GETfaq-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETfaq-categories"></code></pre>
</div>
<form id="form-GETfaq-categories" data-method="GET" data-path="faq-categories" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETfaq-categories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETfaq-categories" onclick="tryItOut('GETfaq-categories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETfaq-categories" onclick="cancelTryOut('GETfaq-categories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETfaq-categories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>faq-categories</code></b>
</p>
</form>


## faq-categories/create




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/faq-categories/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/faq-categories/create"
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
    'https://mamma-send.herokuapp.com/faq-categories/create',
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

url = 'https://mamma-send.herokuapp.com/faq-categories/create'
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
<div id="execution-results-GETfaq-categories-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETfaq-categories-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETfaq-categories-create"></code></pre>
</div>
<div id="execution-error-GETfaq-categories-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETfaq-categories-create"></code></pre>
</div>
<form id="form-GETfaq-categories-create" data-method="GET" data-path="faq-categories/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETfaq-categories-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETfaq-categories-create" onclick="tryItOut('GETfaq-categories-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETfaq-categories-create" onclick="cancelTryOut('GETfaq-categories-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETfaq-categories-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>faq-categories/create</code></b>
</p>
</form>


## faq-categories




> Example request:

```bash
curl -X POST \
    "https://mamma-send.herokuapp.com/faq-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category":"reiciendis"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/faq-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category": "reiciendis"
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
    'https://mamma-send.herokuapp.com/faq-categories',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'category' => 'reiciendis',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/faq-categories'
payload = {
    "category": "reiciendis"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```


<div id="execution-results-POSTfaq-categories" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTfaq-categories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTfaq-categories"></code></pre>
</div>
<div id="execution-error-POSTfaq-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTfaq-categories"></code></pre>
</div>
<form id="form-POSTfaq-categories" data-method="POST" data-path="faq-categories" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTfaq-categories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTfaq-categories" onclick="tryItOut('POSTfaq-categories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTfaq-categories" onclick="cancelTryOut('POSTfaq-categories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTfaq-categories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>faq-categories</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category" data-endpoint="POSTfaq-categories" data-component="body" required  hidden>
<br>
</p>

</form>


## faq-categories/{faq_category}




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/faq-categories/aperiam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/faq-categories/aperiam"
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
    'https://mamma-send.herokuapp.com/faq-categories/aperiam',
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

url = 'https://mamma-send.herokuapp.com/faq-categories/aperiam'
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
<div id="execution-results-GETfaq-categories--faq_category-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETfaq-categories--faq_category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETfaq-categories--faq_category-"></code></pre>
</div>
<div id="execution-error-GETfaq-categories--faq_category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETfaq-categories--faq_category-"></code></pre>
</div>
<form id="form-GETfaq-categories--faq_category-" data-method="GET" data-path="faq-categories/{faq_category}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETfaq-categories--faq_category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETfaq-categories--faq_category-" onclick="tryItOut('GETfaq-categories--faq_category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETfaq-categories--faq_category-" onclick="cancelTryOut('GETfaq-categories--faq_category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETfaq-categories--faq_category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>faq-categories/{faq_category}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>faq_category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="faq_category" data-endpoint="GETfaq-categories--faq_category-" data-component="url" required  hidden>
<br>
</p>
</form>


## faq-categories/{faq_category}/edit




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/faq-categories/molestiae/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/faq-categories/molestiae/edit"
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
    'https://mamma-send.herokuapp.com/faq-categories/molestiae/edit',
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

url = 'https://mamma-send.herokuapp.com/faq-categories/molestiae/edit'
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
<div id="execution-results-GETfaq-categories--faq_category--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETfaq-categories--faq_category--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETfaq-categories--faq_category--edit"></code></pre>
</div>
<div id="execution-error-GETfaq-categories--faq_category--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETfaq-categories--faq_category--edit"></code></pre>
</div>
<form id="form-GETfaq-categories--faq_category--edit" data-method="GET" data-path="faq-categories/{faq_category}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETfaq-categories--faq_category--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETfaq-categories--faq_category--edit" onclick="tryItOut('GETfaq-categories--faq_category--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETfaq-categories--faq_category--edit" onclick="cancelTryOut('GETfaq-categories--faq_category--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETfaq-categories--faq_category--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>faq-categories/{faq_category}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>faq_category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="faq_category" data-endpoint="GETfaq-categories--faq_category--edit" data-component="url" required  hidden>
<br>
</p>
</form>


## faq-categories/{faq_category}




> Example request:

```bash
curl -X PUT \
    "https://mamma-send.herokuapp.com/faq-categories/enim" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category":"sunt"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/faq-categories/enim"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category": "sunt"
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
    'https://mamma-send.herokuapp.com/faq-categories/enim',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'category' => 'sunt',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/faq-categories/enim'
payload = {
    "category": "sunt"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()
```


<div id="execution-results-PUTfaq-categories--faq_category-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTfaq-categories--faq_category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTfaq-categories--faq_category-"></code></pre>
</div>
<div id="execution-error-PUTfaq-categories--faq_category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTfaq-categories--faq_category-"></code></pre>
</div>
<form id="form-PUTfaq-categories--faq_category-" data-method="PUT" data-path="faq-categories/{faq_category}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTfaq-categories--faq_category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTfaq-categories--faq_category-" onclick="tryItOut('PUTfaq-categories--faq_category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTfaq-categories--faq_category-" onclick="cancelTryOut('PUTfaq-categories--faq_category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTfaq-categories--faq_category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>faq-categories/{faq_category}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>faq-categories/{faq_category}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>faq_category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="faq_category" data-endpoint="PUTfaq-categories--faq_category-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category" data-endpoint="PUTfaq-categories--faq_category-" data-component="body" required  hidden>
<br>
</p>

</form>


## faq-categories/{faq_category}




> Example request:

```bash
curl -X DELETE \
    "https://mamma-send.herokuapp.com/faq-categories/rem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/faq-categories/rem"
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
    'https://mamma-send.herokuapp.com/faq-categories/rem',
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

url = 'https://mamma-send.herokuapp.com/faq-categories/rem'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
```


<div id="execution-results-DELETEfaq-categories--faq_category-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEfaq-categories--faq_category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEfaq-categories--faq_category-"></code></pre>
</div>
<div id="execution-error-DELETEfaq-categories--faq_category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEfaq-categories--faq_category-"></code></pre>
</div>
<form id="form-DELETEfaq-categories--faq_category-" data-method="DELETE" data-path="faq-categories/{faq_category}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEfaq-categories--faq_category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEfaq-categories--faq_category-" onclick="tryItOut('DELETEfaq-categories--faq_category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEfaq-categories--faq_category-" onclick="cancelTryOut('DELETEfaq-categories--faq_category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEfaq-categories--faq_category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>faq-categories/{faq_category}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>faq_category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="faq_category" data-endpoint="DELETEfaq-categories--faq_category-" data-component="url" required  hidden>
<br>
</p>
</form>


## faq-questions




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/faq-questions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/faq-questions"
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
    'https://mamma-send.herokuapp.com/faq-questions',
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

url = 'https://mamma-send.herokuapp.com/faq-questions'
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
<div id="execution-results-GETfaq-questions" hidden>
    <blockquote>Received response<span id="execution-response-status-GETfaq-questions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETfaq-questions"></code></pre>
</div>
<div id="execution-error-GETfaq-questions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETfaq-questions"></code></pre>
</div>
<form id="form-GETfaq-questions" data-method="GET" data-path="faq-questions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETfaq-questions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETfaq-questions" onclick="tryItOut('GETfaq-questions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETfaq-questions" onclick="cancelTryOut('GETfaq-questions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETfaq-questions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>faq-questions</code></b>
</p>
</form>


## faq-questions/create




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/faq-questions/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/faq-questions/create"
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
    'https://mamma-send.herokuapp.com/faq-questions/create',
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

url = 'https://mamma-send.herokuapp.com/faq-questions/create'
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
<div id="execution-results-GETfaq-questions-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETfaq-questions-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETfaq-questions-create"></code></pre>
</div>
<div id="execution-error-GETfaq-questions-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETfaq-questions-create"></code></pre>
</div>
<form id="form-GETfaq-questions-create" data-method="GET" data-path="faq-questions/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETfaq-questions-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETfaq-questions-create" onclick="tryItOut('GETfaq-questions-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETfaq-questions-create" onclick="cancelTryOut('GETfaq-questions-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETfaq-questions-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>faq-questions/create</code></b>
</p>
</form>


## faq-questions




> Example request:

```bash
curl -X POST \
    "https://mamma-send.herokuapp.com/faq-questions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category_id":13,"question":"esse","answer":"in"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/faq-questions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_id": 13,
    "question": "esse",
    "answer": "in"
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
    'https://mamma-send.herokuapp.com/faq-questions',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'category_id' => 13,
            'question' => 'esse',
            'answer' => 'in',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/faq-questions'
payload = {
    "category_id": 13,
    "question": "esse",
    "answer": "in"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```


<div id="execution-results-POSTfaq-questions" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTfaq-questions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTfaq-questions"></code></pre>
</div>
<div id="execution-error-POSTfaq-questions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTfaq-questions"></code></pre>
</div>
<form id="form-POSTfaq-questions" data-method="POST" data-path="faq-questions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTfaq-questions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTfaq-questions" onclick="tryItOut('POSTfaq-questions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTfaq-questions" onclick="cancelTryOut('POSTfaq-questions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTfaq-questions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>faq-questions</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>category_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="category_id" data-endpoint="POSTfaq-questions" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>question</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="question" data-endpoint="POSTfaq-questions" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>answer</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="answer" data-endpoint="POSTfaq-questions" data-component="body" required  hidden>
<br>
</p>

</form>


## faq-questions/{faq_question}




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/faq-questions/nulla" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/faq-questions/nulla"
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
    'https://mamma-send.herokuapp.com/faq-questions/nulla',
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

url = 'https://mamma-send.herokuapp.com/faq-questions/nulla'
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
<div id="execution-results-GETfaq-questions--faq_question-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETfaq-questions--faq_question-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETfaq-questions--faq_question-"></code></pre>
</div>
<div id="execution-error-GETfaq-questions--faq_question-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETfaq-questions--faq_question-"></code></pre>
</div>
<form id="form-GETfaq-questions--faq_question-" data-method="GET" data-path="faq-questions/{faq_question}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETfaq-questions--faq_question-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETfaq-questions--faq_question-" onclick="tryItOut('GETfaq-questions--faq_question-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETfaq-questions--faq_question-" onclick="cancelTryOut('GETfaq-questions--faq_question-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETfaq-questions--faq_question-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>faq-questions/{faq_question}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>faq_question</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="faq_question" data-endpoint="GETfaq-questions--faq_question-" data-component="url" required  hidden>
<br>
</p>
</form>


## faq-questions/{faq_question}/edit




> Example request:

```bash
curl -X GET \
    -G "https://mamma-send.herokuapp.com/faq-questions/quam/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/faq-questions/quam/edit"
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
    'https://mamma-send.herokuapp.com/faq-questions/quam/edit',
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

url = 'https://mamma-send.herokuapp.com/faq-questions/quam/edit'
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
<div id="execution-results-GETfaq-questions--faq_question--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETfaq-questions--faq_question--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETfaq-questions--faq_question--edit"></code></pre>
</div>
<div id="execution-error-GETfaq-questions--faq_question--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETfaq-questions--faq_question--edit"></code></pre>
</div>
<form id="form-GETfaq-questions--faq_question--edit" data-method="GET" data-path="faq-questions/{faq_question}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETfaq-questions--faq_question--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETfaq-questions--faq_question--edit" onclick="tryItOut('GETfaq-questions--faq_question--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETfaq-questions--faq_question--edit" onclick="cancelTryOut('GETfaq-questions--faq_question--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETfaq-questions--faq_question--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>faq-questions/{faq_question}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>faq_question</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="faq_question" data-endpoint="GETfaq-questions--faq_question--edit" data-component="url" required  hidden>
<br>
</p>
</form>


## faq-questions/{faq_question}




> Example request:

```bash
curl -X PUT \
    "https://mamma-send.herokuapp.com/faq-questions/excepturi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category_id":13,"question":"asperiores","answer":"sapiente"}'

```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/faq-questions/excepturi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_id": 13,
    "question": "asperiores",
    "answer": "sapiente"
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
    'https://mamma-send.herokuapp.com/faq-questions/excepturi',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'category_id' => 13,
            'question' => 'asperiores',
            'answer' => 'sapiente',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'https://mamma-send.herokuapp.com/faq-questions/excepturi'
payload = {
    "category_id": 13,
    "question": "asperiores",
    "answer": "sapiente"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()
```


<div id="execution-results-PUTfaq-questions--faq_question-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTfaq-questions--faq_question-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTfaq-questions--faq_question-"></code></pre>
</div>
<div id="execution-error-PUTfaq-questions--faq_question-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTfaq-questions--faq_question-"></code></pre>
</div>
<form id="form-PUTfaq-questions--faq_question-" data-method="PUT" data-path="faq-questions/{faq_question}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTfaq-questions--faq_question-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTfaq-questions--faq_question-" onclick="tryItOut('PUTfaq-questions--faq_question-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTfaq-questions--faq_question-" onclick="cancelTryOut('PUTfaq-questions--faq_question-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTfaq-questions--faq_question-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>faq-questions/{faq_question}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>faq-questions/{faq_question}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>faq_question</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="faq_question" data-endpoint="PUTfaq-questions--faq_question-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>category_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="category_id" data-endpoint="PUTfaq-questions--faq_question-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>question</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="question" data-endpoint="PUTfaq-questions--faq_question-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>answer</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="answer" data-endpoint="PUTfaq-questions--faq_question-" data-component="body" required  hidden>
<br>
</p>

</form>


## faq-questions/{faq_question}




> Example request:

```bash
curl -X DELETE \
    "https://mamma-send.herokuapp.com/faq-questions/libero" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mamma-send.herokuapp.com/faq-questions/libero"
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
    'https://mamma-send.herokuapp.com/faq-questions/libero',
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

url = 'https://mamma-send.herokuapp.com/faq-questions/libero'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
```


<div id="execution-results-DELETEfaq-questions--faq_question-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEfaq-questions--faq_question-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEfaq-questions--faq_question-"></code></pre>
</div>
<div id="execution-error-DELETEfaq-questions--faq_question-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEfaq-questions--faq_question-"></code></pre>
</div>
<form id="form-DELETEfaq-questions--faq_question-" data-method="DELETE" data-path="faq-questions/{faq_question}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEfaq-questions--faq_question-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEfaq-questions--faq_question-" onclick="tryItOut('DELETEfaq-questions--faq_question-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEfaq-questions--faq_question-" onclick="cancelTryOut('DELETEfaq-questions--faq_question-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEfaq-questions--faq_question-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>faq-questions/{faq_question}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>faq_question</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="faq_question" data-endpoint="DELETEfaq-questions--faq_question-" data-component="url" required  hidden>
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
    -d '{"password":"nihil"}'

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
    "password": "nihil"
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
            'password' => 'nihil',
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
    "password": "nihil"
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
    -d '{"name":"omnis","email":"stephan59@example.org"}'

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
    "name": "omnis",
    "email": "stephan59@example.org"
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
            'name' => 'omnis',
            'email' => 'stephan59@example.org',
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
    "name": "omnis",
    "email": "stephan59@example.org"
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



