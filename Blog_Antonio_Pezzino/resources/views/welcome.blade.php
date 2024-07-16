<x-layout title="benevnuto">



<h1 class="title">{{ config('app.name') }}</h1>

<ul id="articles-list"></ul>


    <script>
        fetch('http://127.0.0.1:8000/api/articles')
            .then(response => response.json())
            .then(data => {

                const articlesList = document.getElementById('articles-list');

                for(const item of data) {
                    articlesList.innerHTML += '<li>' + item.title + '</li>';
                }

            })
            .catch(error => {});
    </script>

</x-layout>

