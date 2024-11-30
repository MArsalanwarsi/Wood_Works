 <!-- Bootstrap Icons -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
 <!-- Bootstrap JS (for collapsing navbar) -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
 <script>
     // Toggle sidebar collapse
     document.getElementById('sidebar_collapse_btn').addEventListener('click', function() {
         document.getElementById('sidebar').classList.toggle('collapsed');
         document.querySelectorAll('.side_text').forEach(function(element) {
             element.classList.toggle('hide_text');
         })
     });
 </script>
 </body>

 </html>