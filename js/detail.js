window.onload = function() {
    let query = location.search;
    let value = query.split('=');
    let id = value[1];
    async function resJson() {
        data = {
            action: 'detail',
            id: id
        }
        const REQUEST_URL = 'api/index.php';
        const res = await fetch(REQUEST_URL,
            {
                method: "POST",
                body: JSON.stringify(data),
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                }
            });
        let blog = await res.json();
        let title = blog["title"];
        document.getElementById("title").setAttribute('value', title);
    }
    resJson();
}