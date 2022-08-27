window.onload = function() {
    async function resJson() {
        data = {
            action: "read"
        };;
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
        let blogs = await res.json();
        createTable(blogs);
    }
    function createTable(blogs) {
        let table = document.getElementById('blog_content');
        blogs.forEach (function(blog) {
            id = blog['id'];
            title = blog['title'];
            contributor = blog['contributor'];
            updated_at = blog['updated_at'];
            newRow = table.insertRow();
            newCell = newRow.insertCell();
            newText = document.createTextNode(title);
            newCell.appendChild(newText);
            newCell = newRow.insertCell();
            newText = document.createTextNode(contributor);
            newCell.appendChild(newText);
            newCell = newRow.insertCell();
            newText = document.createTextNode(updated_at);
            newCell.appendChild(newText);
            newCell = newRow.insertCell();
            newCell.insertAdjacentHTML('beforeend', `<button class="delete-button" onclick="blogDelete(${id})">削除</button>`);
            newCell = newRow.insertCell();
            newCell.insertAdjacentHTML('beforeend', `<button class="detail-button" onclick="location.href='detail.html?id=${id}'">編集</button>`)
        });
    }
    resJson();
};

