function blogDelete(id) {
    let result = window.confirm("削除しますか？");
    async function resJson() {
        data = {
            action: "delete",
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
        await res.json();
    }
    if (result) {
        resJson();
        location.reload();
    }
}
