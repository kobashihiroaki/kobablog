document.getElementById("submit-button").addEventListener('click', function() {
    let title = document.getElementById("title").value;
    let content = document.getElementById("new-content").value;
    if (title == "" || content =="") {
        alert("ちゃんと入力してください。");
        return;
    }
    async function resJson() {
        data = {
            action: "add",
            model: "blog",
            title: title,
            content: content
        };
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
            alert("登録しました。");
        }
    }
    resJson();
});