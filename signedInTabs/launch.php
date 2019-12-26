<div class="tabs-container__content tabs-container__content--active"  data-tab="1">
    <div class="intro_box_tab">
        <p class="tab-box-title">Caliber as activity tracking app</p>
        <div class="intro-sub1">
            <div class="intro-style">Implement Caliber into your workouts and see the results for yourself. Measuring something is often the correct way to improve on something.</div>
            <div class="collapse">Activate your Caliber account</div>
            <div class="collcontent" >    
                <p>Again Something</p>
            </div> 
        </div>
        <div class="intro-sub2">
            <div class="collapse">Create plans for yourself or get plans from us</div>
            <div class="collcontent">    
                <p>Look for something again</p>
            </div> 
        </div>
    </div>
</div>
<script>
    var collapseButt = document.getElementsByClassName("collapse");
    var i;
    for (i = 0; i < collapseButt.length; i++) {
        collapseButt[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var collcontent = this.nextElementSibling;
            if (collcontent.style.display === "block") {
                collcontent.style.display = "none";
            } else {
                collcontent.style.display = "block";
            }
        });
    }
</script>