# JavaScript AJAX tutorial

- AJAX is an acronym for Asynchronous JavaScript & XML.
- AJAX is not a language, framework or library.
- A set of web technologies to send & receive data asynchronously from a client to a server.
- It's all done behind the scenes, without having to explicitly reload the webpage.
- Even though XML is included in the acronym (AJAX), XML is rarely used in AJAX anymore as JSON has taken its place.
- JSON is JavaScript Object Notation, it is easier, faster and popular.
- Most external APIs use JSON not XML, or both.
- AJAX can also work with plain text.

## How AJAX work?

- A client makes a common request to a server by clicking a link.
- The server sends a common response back with headers and webpage.
- With AJAX, a client can make a request asynchronously in the background without having to reload entire webpage.
- This is done by making an JavaScript call to AJAX Engine with plain JS or a library such as jQuery/Axios.
- Then the AJAX Engine sends an XmlHttpRequest(XHR) to Server, which will be used to fetch data or update a database.
- The server will return data in JSON / XML or plain text formats to AJAX Engine.
- Finally, the AJAX Engine processes the response from the server and forwards it to the client as a HTML Response.

 
## XmlHttpRequest(XHR) Object

- XmlHttpRequest(XHR) is an API, an object with properties and methods.
- All modern browsers have this API in their JS environments. 
- Its methods transfer data between client / server
- Can be used with other protocols than HTTP
- Can work with data other than XML (JSON, plain text)


## Libraries and Other Methods

- There and different ways to make AJAX calls. 
- Before jump into libraries, you should know how to make an actual request using XmlHttpRequest(XHR) Object.     

    - jQuery
    - Axios
    - Superagent
    - FetchAPI
    - Prototype
    - Node HTTP



## HTTP Statuses

    - 200 : "OK"
    - 403 : "Forbidden"
    - 404 : "Not Found"



## readyState Values

    - 0 : request not initialized
    - 1 : server connection established
    - 2 : request received
    - 3 : processing request
    - 4 : request finished and response is ready


## `xhr.onload`

- You should use `xhr.onerror` with `xhr.onload` to handle errors.



### Difference between `xhr.onload` and `xhr.onreadystatechange`

- `xhr.onload` will run only if `readyState` is 4. 
- `xhr.onreadystatechange` has 2, 3 &  4 `readyState`s

### Onprogress

- Used for loaders
- `xhr.onprogress` has `readyState` 3 (processing request).




