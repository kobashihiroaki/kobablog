window.onload = function() {
    async function resJson() {
        data = {
            action: "detail",
            model: "blog",
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
        let content = blog["content"];
        document.getElementById("title").setAttribute('value', title);
        document.getElementById("content").value = content;
    }
    resJson();
}