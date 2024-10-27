// Kategorileri dinamik olarak yükleme
fetch('path/to/categories.json')
  .then(response => response.json())
  .then(data => {
    // Kategorileri butonlar olarak oluşturun
    const categoryList = document.getElementById('category-list');
    data.categories.forEach(category => {
      const button = document.createElement('button');
      button.classList.add('btn', 'btn-secondary', 'category-btn');
      button.setAttribute('data-category', category.name);
      button.innerText = category.name;
      categoryList.appendChild(button);
    });
  });
