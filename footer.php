                </section>
                <aside id="filter" class="fill">
                    Фильтр
                </aside>
            </div>
            <footer>
                Подвал
            </footer>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script>
            $(function() {
                $('header').on('click', '.burger', function(){
                    $('nav').toggle();
                })
            });
        </script>
    </body>
</html>