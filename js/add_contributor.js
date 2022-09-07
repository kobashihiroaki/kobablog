document.getElementById("submit-button").addEventListener('click', function() {
    async function resJson() {
        let contributor = document.getElementById("contributor").value;
        data = {
            action: "add",
            model: "contributor",
            contributor: contributor
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