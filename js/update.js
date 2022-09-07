document.getElementById("update").addEventListener('click', function() {
    async function resJson() {
        let title = document.getElementById("title").value;
        let content = document.getElementById("content").value;
        data = {
            action: "update",
            model: "blog",
            id: id,
            title: title,
            content: content
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
        let success = await res.json();
        if (success == true) {
            alert("編集が完了しました。");
        }
    }
    resJson();
});