<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
<script type="text/javascript">
    $(function() {
        $(".ps span.image")
            .click(function() {
                var ref = $(this).attr("href");
                if($("#" + ref).css('visibility') == 'hidden') {
                    $("#" + ref).css('visibility','visible');
                } else {
                    $("#" + ref).css('visibility','hidden');
                }
            });
    });
</script>

<div class="contatti clearfix">
    <div class="team-section"> <h1>
            Our team
        </h1>
        <span class="border"></span>
        <div class="ps">
            <a href="#p1">
                <img src="immagini_sito/marco.jpg">
            </a>
            <a href="#p2">
                <img src="immagini_sito/claudio.jpg">
            </a>
        </div>
    </div>

    <div class="section" id="p1">
        <span class="name"> Marco Bellingeri</span>
        <span class="border"></span>
        <p>Contact me: 20018634@studenti.uniupo.it</p>
    </div>
    <div class="section" id="p2">
        <span class="name"> Claudio Rotunno</span>
        <span class="border"></span>
        <p>Contact me: 20019916@studenti.uniupo.it</p>
    </div>
</div>
