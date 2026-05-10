$(document).ready(function(){
  $("#chemLab").click(function(){
    $("#chemLabPics").modal();
  });
  
    var imagesChemLab = [
            "images/chemlab/img1.jpeg",
            "images/chemlab/img2.jpeg",
			"images/chemlab/img3.jpeg",
			"images/chemlab/img4.jpeg",
            "images/chemlab/img5.jpeg"    
        ];

        var imageIndex = 0;

        $("#prevCL").on("click", function(){          
            imageIndex = (imageIndex + imagesChemLab.length -1) % (imagesChemLab.length);    
            $("#imagesCL").attr('src', imagesChemLab[imageIndex]);
        });

        $("#nextCL").on("click", function(){
            imageIndex = (imageIndex+1) % (imagesChemLab.length);    
            $("#imagesCL").attr('src', imagesChemLab[imageIndex]);
        });

       // $("#image").attr(images[0]);
});