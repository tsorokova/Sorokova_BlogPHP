<?php
		class Post { 
		private $title;
		private $text;
		

		function __construct($title, $text) {
			$this ->title = $title;
			$this ->text = $text;
	
		}

		public function set_title($title) {
			$this->title = $title;
		}

		public function get_title(){
			return $this->title;
		}
		
		public function get_text(){
			return $this->text;
			}
		public function preview(){
			return substr($this->text, 0 , 199) . '...' ;
		}
}
	

	$posts = array (
			new Post('7 Types of Sandals to Invest in This Summer','Summer: the season of outdoor dining, rosé, and, unfortunately, sweaty feet. When the heat kicks in closed-toe shoes are not an option, but this years crop of sandals will make you forget what an ankle boot even looks like. Check out our comprehensive guide to the seven must-have sandals every woman should have stocked in her closet this season.These are the sandals youll wear all through Summer and even deep into fall. They. Go. With. Everything. The low, comfy heel will work with you all day, from the office to happy hour to dinner and finally to an I-shouldnt-be-doing-this-but-who-cares nightcap.Nothing screams summer like a colorful wedge. They are made to be worn with sundresses, denim skirts, white frilly tops, and everything else you wear during the warmer months.A pair of hyper-decorated sandals make for an instant mood-booster. Try this pair by Elina Linardaki, a designer known for her pompom gladiators, or make a pit-stop at a craft store and DIY your own.The babouche had a moment this spring, but this season swap it out for its cousin, the pajama sandal.We know, we know—the clog reinvents itself every season; theres an "it" version every year. Two years ago it was Prada and last summer everyone wore the knotted Saint Laurents. 2016 belongs to this curvaceous Alexander McQueen runway heel, complete with embroidered flowers.<img src=" 1.jpg">
', 'Sorokova', 1), 
			new Post('Dots and lines can make garments that suit the wearer ', 'Design is a creative endeavour to meet the needs of its executers and end users, says Ankita Sodhi.
A product is developed according to a planned layout that should result in a functional and aesthetically pleasing outcome. When a designer works on a design for a garment, thought has to be given to make the garment appeal to the target client. It is essential for the designer to keep in mind the psychographics and demographics of the wearer.
So when a motif, design or silhouette is visualised as a component of the final garment, the aim must be to give the wearer a well-composed and suitable appearance by experimenting with various elements and principles of design.
The elements of design are the building blocks of any design. Compiled skilfully, they create effective visual communication.
The elements of design discussed are:
-->         Dot/Point
-->         Various styles of lines
Dot/Point
-->         A dot is the basic element of design.
-->         It is the smallest and the simplest unit suggesting its presence.
-->         Dots are the building blocks of everything else in a design.
-->         The size of dots in a design is not related to any kind of illusion of height or length in any garment.
-->         Larger dots create an illusion of increased surface area, making the wearer appear to be wide. So, larger dots are suitable for slim people and inappropriate for those with a heavy body type.
-->         Small dots look best on people with a wide and heavy body structure as the dots have a smaller surface area and create an illusion of slimness. They have the added advantage of looking good even on slim people.', 'Sorokova', 2),
			new Post('New Media: A new platform for fashion industry 
 ', 'Social media has opened doors to new and emerging designers with small budgets to push their creativity and contribute to the fashion world by actively staying plugged-in. Designers and brands now market themselves directly to clients through the social media and gradually build brand loyalty because of the user-friendly and accessible nature of social media, write Mahesh Shaw and Mehak Mittal.New Media is a catch term of the 21st Century. Very broadly, new media is something related to the internet and the interplay among technology, images, and sound. It is about making things digital, and has characteristics of being manipulated, networkable, dense, compressible and interactive. The various forms of new media are internet, websites, computer multimedia, computer games, CD-ROMS and DVDs. The population of internet users is increasing at a very fast rate. According to a nationally representative survey by the Pew Research Centres Internet and American Life Project, some 70 per cent of American adults aged 18 and older have speed-broadband connection at home as of May 2013. India has the 3rd largest internet user population after China and the US as per the report NASDOC: SCOR, 2013.The internet is one of the forms of new media which we use extensively. We say humans are social animals. We now say humans are digital animals. We tweet, re-tweet, share, post, upload, comment, like, follow and update 24/7. For us, being social means going digital in the world of Facebook, Twitter, Instagram, Pinterest, YouTube, Tumblr and LinkedIn which are the most commonly used social media networks. Not only is our social life getting digitalised, our entire lifestyle is also getting progressively influenced by the internet. People chat, have online discussions and forums on micro-blogging sites, read books, magazines, and newspapers on the web, shop online, email, and surf various search engines for anything and everything they want to know either on their phones or tablets. Social media is the most popular form of new media used for virtual communication, which allows us to stay connected to all of friends, colleagues, and acquaintances with the click of a button.Social media and fashionThe fashion industry uses social media as a promising platform to connect with consumers directly. Social media is used by brands of all categories. It has also played a major role in helping the fashion industry reach out to a much wider customer base with lesser costs and more presence in the digital world. All fashion brands and designers have a Facebook page, and a Twitter and an Instagram accounts. Brands have also started previewing their collections exclusively on Pinterest.To drive growth, to be more exclusive, and to augment the users online brand experience, luxury brands Louis Vuitton, Dolce & Gabbana, and Burberry have launched their own social networks. Chanel along with its social networking site has also launched an application with Apple where it allows users to catch up on the latest news, watch exclusive ready-to-wear shows, browse through looks, and also locate stores nearby. DKNY used Instagram to interact one-to-one with fans.Burberry used Snapchat to reveal its spring/summer 2016 collections a full day before it hits the catwalk. Tommy Hilfiger posts 360 degree videos to Twitter.', 'Sorokova', 3));
	?>