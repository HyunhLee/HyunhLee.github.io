// pagination.js
export function initPagination({
    data = [],
    containerSelector = '.test_list',
    paginationSelector = '.pagination',
    itemsPerPage = 5,
    renderItem = () => '',
  }) {
    let currentPage = 1;
    const totalPages = Math.ceil(data.length / itemsPerPage);
  
    function renderList() {
      const start = (currentPage - 1) * itemsPerPage;
      const end = start + itemsPerPage;
      const items = data.slice(start, end);
      const $container = document.querySelector(containerSelector);
      $container.innerHTML = items.map(renderItem).join('');
    }
  
    function renderPagination() {
      const $pagination = document.querySelector(paginationSelector);
      $pagination.innerHTML = '';
  
      // Prev button
      const prev = document.createElement('li');
      prev.innerHTML = '&laquo;';
      prev.className = currentPage === 1 ? 'disabled' : '';
      prev.style.cursor = 'pointer';
      prev.onclick = () => {
        if (currentPage > 1) {
          currentPage--;
          renderList();
          renderPagination();
        }
      };
      $pagination.appendChild(prev);
  
      // Page numbers
      for (let i = 1; i <= totalPages; i++) {
        const li = document.createElement('li');
        li.textContent = i;
        li.className = (i === currentPage) ? 'active' : '';
        li.style.cursor = 'pointer';
        li.onclick = () => {
          currentPage = i;
          renderList();
          renderPagination();
        };
        $pagination.appendChild(li);
      }
  
      // Next button
      const next = document.createElement('li');
      next.innerHTML = '&raquo;';
      next.className = currentPage === totalPages ? 'disabled' : '';
      next.style.cursor = 'pointer';
      next.onclick = () => {
        if (currentPage < totalPages) {
          currentPage++;
          renderList();
          renderPagination();
        }
      };
      $pagination.appendChild(next);
    }
  
    renderList();
    renderPagination();
  }
  