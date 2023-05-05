document.getElementById('download-btn').addEventListener('click', function () {
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'assets/php/download.php', true);
  xhr.responseType = 'blob';
  xhr.onload = function () {
      if (this.status === 200) {
          var blob = new Blob([this.response], {type: 'text/csv'});
          var link = document.createElement('a');
          link.href = window.URL.createObjectURL(blob);
          link.download = 'data.csv';
          document.body.appendChild(link);
          link.click();
          document.body.removeChild(link);
      }
  };
  xhr.send();
});
