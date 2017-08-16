'use strict';

class Frame {
    static ajaxRequest(method, url, request, async) {
        let xhr = new XMLHttpRequest();

        if (async === undefined) {
            async = true;
        }

        xhr.open(method, url + '?' + request, async);
        xhr.send();
    }

    static ajaxResponse(method, url, request, async, obj, callback) {
        let xhr = new XMLHttpRequest(),
            data = '';

        if (async === undefined) {
            async = true;
        }

        xhr.open(method, url + '?' + request, async);
        xhr.onreadystatechange = () => {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                data = JSON.parse(xhr.responseText);
                if (callback !== undefined) {
                    callback(obj, data);
                }
                return data;
            } else {
                data = 'Server is not responding';
                return data;
            }
        };
        xhr.send();
    }
}