setTimeout(() => {
    window.requestAnimFrame = function()
	{
		return (
			window.requestAnimationFrame       || 
			window.webkitRequestAnimationFrame || 
			window.mozRequestAnimationFrame    || 
			window.oRequestAnimationFrame      || 
			window.msRequestAnimationFrame     || 
			function(/* function */ callback){
				window.setTimeout(callback, 1000 / 60);
			}
		);
}();

var canvas2 = document.getElementById('canvas2'); 
var context = canvas2.getContext('2d');

//get dpi2
let dpi2 = window.devicePixelRatio || 1;
context.scale(dpi2, dpi2);
console.log(dpi2);

function fix_dpi2() {
//get CSS height
//the + prefix casts it to an integer
//the slice method gets rid of "px"
let style_height = +getComputedStyle(canvas2).getPropertyValue("height").slice(0, -2);
let style_width = +getComputedStyle(canvas2).getPropertyValue("width").slice(0, -2);

//scale the canvas2
canvas2.setAttribute('height', style_height * dpi2);
canvas2.setAttribute('width', style_width * dpi2);
}

	var particle_count = 70,
		particles = [],
		couleurs   = ["#00AEF6", "#00AEF6", "#00AEF6","#00AEF6"];
    function Particle()
    {

        this.radius = Math.round((Math.random()*3)+5);
        this.x = Math.floor((Math.random() * ((+getComputedStyle(canvas2).getPropertyValue("width").slice(0, -2) * dpi2) - this.radius + 1) + this.radius));
        this.y = Math.floor((Math.random() * ((+getComputedStyle(canvas2).getPropertyValue("height").slice(0, -2) * dpi2) - this.radius + 1) + this.radius));
        this.color = couleurs[Math.floor(Math.random()*couleurs.length)];
        this.speedx = Math.round((Math.random()*201)+0)/100;
        this.speedy = Math.round((Math.random()*201)+0)/100;

        switch (Math.round(Math.random()*couleurs.length))
        {
            case 1:
            this.speedx *= 1;
            this.speedy *= 1;
            break;
            case 2:
            this.speedx *= -1;
            this.speedy *= 1;
            break;
            case 3:
            this.speedx *= 1;
            this.speedy *= -1;
            break;
            case 4:
            this.speedx *= -1;
            this.speedy *= -1;
            break;
        }
            
        this.move = function()
        {
            
            context.beginPath();
            context.globalCompositeOperation = 'source-over';
            context.fillStyle   = this.color;
            context.globalAlpha = 1;
            context.arc(this.x, this.y, this.radius, 0, Math.PI*2, false);
            context.fill();
            context.closePath();

            this.x = this.x + this.speedx;
            this.y = this.y + this.speedy;
            
            if(this.x <= 0+this.radius)
            {
                this.speedx *= -1;
            }
            if(this.x >= canvas2.width-this.radius)
            {
                this.speedx *= -1;
            }
            if(this.y <= 0+this.radius)
            {
                this.speedy *= -1;
            }
            if(this.y >= canvas2.height-this.radius)
            {
                this.speedy *= -1;
            }

            for (var j = 0; j < particle_count; j++)
            {
                var particleActuelle = particles[j],
                    yd = particleActuelle.y - this.y,
                    xd = particleActuelle.x - this.x,
                    d  = Math.sqrt(xd * xd + yd * yd);

                if ( d < 200 )
                {
                    context.beginPath();
                    context.globalAlpha = (200 - d) / (200 - 0);
                    context.globalCompositeOperation = 'destination-over';
                    context.lineWidth = 1;
                    context.moveTo(this.x, this.y);
                    context.lineTo(particleActuelle.x, particleActuelle.y);
                    context.strokeStyle = this.color;
                    context.lineCap = "round";
                    context.stroke();
                    context.closePath();
                }
            }
        };
    };
    for (var i = 0; i < particle_count; i++)
    {
        fix_dpi2();
        var particle = new Particle();
        particles.push(particle);
    }


    function animate2()
    {
        fix_dpi2();
        context.clearRect(0, 0, canvas2.width, canvas2.height);
        for (var i = 0; i < particle_count; i++)
        {
            particles[i].move();
        }
        requestAnimFrame(animate2);
    }
   
    animate2();

}, 3000);
