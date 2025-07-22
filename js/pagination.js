function renderList(page) {
    const start = (page - 1) * itemsPerPage;
    const end = start + itemsPerPage;
    const paginatedItems = test.slice(start, end);
  
    const $list = $(".test_list");
    $list.empty();
  
    paginatedItems.forEach(data => {
      const template = `
        <tr>
          <td class="num">${data.no}</td>
          <td class="subject">
            <div>
              <a href="/bbs/board_table35_detail.html?param1=${data.no}&param2=${data.title}&param3=${data.url}&param4=${data.end}&param5=${data.date}&body1=${data.body1}&body2=${data.body2}&body3=${data.body3}&body4=${data.body4}">
                ${data.title} (${data.end})
              </a>
            </div>
          </td>
          <td class="name sv_use"><span class="sv_member">${data.id}</span></td>
          <td class="datetime">${data.date}</td>
        </tr>
      `;
      $list.append(template);
    });
  }

  function renderPagination() {
    const $pagination = $(".pagination");
    $pagination.empty();
  
    for (let i = 1; i <= totalPages; i++) {
      const activeClass = (i === currentPage) ? 'active' : '';
      $pagination.append(`
        <li class="${activeClass}" style="display:inline-block; margin:0 5px; cursor:pointer;" data-page="${i}">
          ${i}
        </li>
      `);
    }
  
    $(".pagination li").on("click", function () {
      currentPage = parseInt($(this).data("page"));
      renderList(currentPage);
      renderPagination();
    });
  }