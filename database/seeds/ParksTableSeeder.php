<?php

use Illuminate\Database\Seeder;

class ParksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('parks')->insert([
				'name' => 'Ben Hawes',
				'address' => '400 Booth Field Road, Owensboro, KY 42301',
				'zip_code' => '42301',
				'description' => 'Located West of Owensboro, Ben Hawes Park offers opportunities for fun and education. On the park grounds are the remains of a deep coal mine operation that thrived from the early 1900s through the 1950s. Several buildings remain that can be reached by hiking trails. Park benches are conveniently located around the mine site. Along the wooded countryside of the park, there is an outdoor classroom where nature classes can be held.',
				'img' => '/img/parks/benhawes.jpg',
				'sign_img' => '/img/signs/benhawes_sign.jpg',
				'location' => 'lat: 37.795483, lng: -87.182807'
			]);

			DB::table('parks')->insert([
				'name' => 'Cap Gardner',
				'address' => '238 East 20th Street, Owensboro, KY 42303',
				'zip_code' => '42303',
				'description' => 'Cap Gardner Park is a special use park. Acquired in 1977 it has 1.6 acres and exhibits a wide assortment of trees, shrubs, and flowers. Because of its beautiful plants and trees, it is often used for weddings and outdoor photography sessions. Cap Gardner Park is the former Nature Park and was rededicated October 4, 2005.',
				'img' => '/img/parks/capgardner.jpg',
				'sign_img' => '/img/signs/capgardner_sign.jpg',
				'location' => 'lat: 37.756476, lng: -87.108018'
			]);

			DB::table('parks')->insert([
				'name' => 'Chautauqua',
				'address' => '1301 Bluff Avenue, Owensboro, KY 42303',
				'zip_code' => '42303',
				'description' => 'Cap Gardner Park is a special use park. Acquired in 1977 it has 1.6 acres and exhibits a wide assortment of trees, shrubs, and flowers. Because of its beautiful plants and trees, it is often used for weddings and outdoor photography sessions. Cap Gardner Park is the former Nature Park and was rededicated October 4, 2005.',
				'img' => '/img/parks/chautauqua.jpg',
				'sign_img' => '/img/signs/chautauqua_sign.jpg',
				'location' => 'lat: 37.764904, lng: -87.092036'
			]);

			DB::table('parks')->insert([
				'name' => 'Dugan Best',
				'address' => '1003 Omega Street, Owensboro, KY 42301',
				'zip_code' => '42301',
				'description' => 'Dugan Best Park is a neighborhood park named in honor of the late Mayor Dugan Best.',
				'img' => '/img/parks/duganbest.jpg',
				'sign_img' => '/img/signs/duganbest_sign.jpg',
				'location' => 'lat: 37.765201, lng: -87.138779'
			]);

			DB::table('parks')->insert([
				'name' => 'English',
				'address' => '2 Woodford Avenue, Owensboro, KY 42301',
				'zip_code' => '42301',
				'description' => 'Located on the beautiful Ohio River, this 16 acre park was established in 1977. This former home of the Ohio River Lock & Dam Number 46, was named after Peter B. English, who was lockmaster for 16 years.',
				'img' => '/img/parks/english.jpg',
				'sign_img' => '/img/signs/english_sign.jpg',
				'location' => 'lat: 37.777627, lng: -87.128196'
			]);

			DB::table('parks')->insert([
				'name' => 'Germantown',
				'address' => '824 Crittenden Street, Owensboro, KY 42303',
				'zip_code' => '42303',
				'description' => 'A 2 acre neighborhood park established in 2007.',
				'img' => '/img/parks/germantown.jpg',
				'sign_img' => '/img/signs/germantown_sign.jpg',
				'location' => 'lat: 37.768341, lng: -87.107619'
			]);

			DB::table('parks')->insert([
				'name' => 'Goose Egg',
				'address' => 'West 3rd Street, Owensboro, KY 42301',
				'zip_code' => '42301',
				'description' => 'Goose Egg Park is a 0.3 acre neighborhood park acquired in 1901. Elliptical in form, it is located in the middle of Third Street at Orchard Street intersection across from the Eaton Memorial Baptist Church.',
				'img' => '/img/parks/gooseegg.jpg',
				'sign_img' => '/img/signs/gooseegg_sign.jpg',
				'location' => 'lat: 37.772944, lng: -87.125065'
			]);

			DB::table('parks')->insert([
				'name' => 'Heartland',
				'address' => '2528 Avenue Of The Parks, Owensboro, KY 42303',
				'zip_code' => '42303',
				'description' => 'A 0.4 acre neighborhood park established in 1997 at East Byers and Heartland Park.',
				'img' => '/img/parks/heartland.jpg',
				'sign_img' => '/img/signs/heartland_sign.jpg',
				'location' => 'lat: 37.753789, lng: -87.077558'
			]);

			DB::table('parks')->insert([
				'name' => 'Horse Fork Creek',
				'address' => '3005 Fairview Drive, Owensboro, KY 42303',
				'zip_code' => '42303',
				'description' => "Horse Fork Creek Park is Daviess County's newest park. Dedicated in 2007, the park is the largest soccer complex in Western Kentucky. Local league play, seasonal camps and tournaments use the park throughout the year. Soccer isn't the only draw the park boasts. Horse Fork Creek Park is home to US Army Corps of Engineers certified wetlands as well as a 6.3 acre lake. The park is also adjacent to the Greenbelt. The most recent addition to the park is a $100,000 playground structure. Future plans for Horse Fork Creek Park include a spraypark, shade structure for the playground and fishing docks.",
				'img' => '/img/parks/horseforkcreek.jpg',
				'sign_img' => '/img/signs/horseforkcreek_sign.jpg',
				'location' => 'lat: 37.746047, lng: -87.064956'
			]);

			DB::table('parks')->insert([
				'name' => 'Jack C. Fisher',
				'address' => '3900 West 5th Street Road, Owensboro, KY 42301',
				'zip_code' => '42301',
				'description' => 'Fisher Park is a 33 acre community park acquired in 1985. Within the park is the Owensboro Softball Complex, a first-class complex in the state of Kentucky.',
				'img' => '/img/parks/jackfisher.jpg',
				'sign_img' => '/img/signs/jackfisher_sign.jpg',
				'location' => 'lat: 37.762152, lng: -87.160100'
			]);

			DB::table('parks')->insert([
				'name' => 'James Mason',
				'address' => '1401 West 7th Street, Owensboro, KY 42301',
				'zip_code' => '42301',
				'description' => 'James Mason Park  formerly called Seventh Street Park. The park was dedicated in 1975.',
				'img' => '/img/parks/jamesmason.jpg',
				'sign_img' => '/img/signs/jamesmason_sign.jpg',
				'location' => 'lat: 37.769268, lng: -87.125588'
			]);

			DB::table('parks')->insert([
				'name' => 'Joe Ford Nature',
				'address' => '3870 West 2nd Street, Owensboro, KY 42301',
				'zip_code' => '42301',
				'description' => 'Joe Ford Nature Park is a special use park acquired in 1998 and located near the intersection of the Wendell Ford Expressway and Hwy 60 West, and is behind the Green River Area Development District (GRADD) Office. It was named in honor of Joe Ford who initially developed the 15 acre woodland into an outdoor classroom. The park now serves as a trailhead for the Adkisson Greenbelt Park – West Owensboro Trail.',
				'img' => '/img/parks/joeford.jpg',
				'sign_img' => '/img/signs/joeford_sign.jpg',
				'location' => 'lat: 37.773521, lng: -87.163889'
			]);

			DB::table('parks')->insert([
				'name' => 'Kendall-Perkins',
				'address' => '1201 West 5th Street, Owensboro, KY 42303',
				'zip_code' => '42303',
				'description' => 'Kendall-Perkins Park is a 2 acre neighborhood park acquired n 1975. In 1973, the park was given the name Kendall-Perkins in memory of Joseph W. Kendall and Joseph P. Perkins, two citizens of Owensboro who gave years of selfless, tireless devotion to the neighborhood and children who lived in the area. Kendall-Perkins has been the home to the Dust Bowl basketball tournament since its’ inception in 1973',
				'img' => '/img/parks/kendallperkins.jpg',
				'sign_img' => '/img/signs/kendallperkins_sign.jpg',
				'location' => 'lat: 37.771264, lng: -87.123568'
			]);

			DB::table('parks')->insert([
				'name' => 'Legion',
				'address' => '3047 Legion Park Drive, Owensboro, KY 42303',
				'zip_code' => '42303',
				'description' => 'Legion Park is a large square park located between J.R. Miller Boulevard and Veach Road. It offers many things including a walking trail, a handicap accessible playground and many picnic shelters that are available to rent.',
				'img' => '/img/parks/legion.jpg',
				'sign_img' => '/img/signs/legion_sign.jpg',
				'location' => 'lat: 37.740616, lng: -87.105459'
			]);

			DB::table('parks')->insert([
				'name' => 'Max Rhoads',
				'address' => 'West 7th Street, Owensboro, KY 42301',
				'zip_code' => '42301',
				'description' => 'Max Rhoads Park is a neighborhood park comprising 1.21 acres located at Seventh & Walnut Streets acquired in 1976.',
				'img' => '/img/parks/maxrhoads.jpg',
				'sign_img' => '/img/signs/maxrhoads_sign.jpg',
				'location' => 'lat: 37.769451, lng: -87.118319'
			]);

			DB::table('parks')->insert([
				'name' => 'Moreland',
				'address' => '1215 Hickman Avenue, Owensboro, KY 42301',
				'zip_code' => '42301',
				'description' => 'Moreland Park is a 17 acre community park located on West Parrish Avenue acquired in 1930. It is separated by Hickman Avenue from the Sportscenter and the Edge Ice Arena. The Moreland Park Tennis Center consisting of 12 lighted tennis courts is open to the public, and is host to youth and adult tennis tournaments, as well as high school and college matches. The Moreland Park Tennis Center is also home to the Moreland Park Tennis Association and the National Junior Tennis League.',
				'img' => '/img/parks/moreland.jpg',
				'sign_img' => '/img/signs/moreland_sign.jpg',
				'location' => 'lat: 37.762645, lng: -87.123746'
			]);

			DB::table('parks')->insert([
				'name' => 'Panther Creek',
				'address' => '5160 Wayne Bridge Road, Owensboro, KY 42301',
				'zip_code' => '42301',
				'description' => "Panther Creek Park features 4 screened-in shelters and 3 open air pavilions. Shelters are available for rental April 1 - October 31 each year. Many groups host company picnics, family reunions and birthday parties. Wedding are frequently held at the two gazebos in the park.
				The park also boasts a 6 acre lake that is regularly stocked by the Kentucky Department of Fish & Wildlife. Waterfowl and turtles also call the lake home, making it a wonderful educational experience. Fishing guidelines follow those of the Kentucky Department of Fish & Wildlife and are posted at the park. 
				Seven walking trails wind throughout the park with 1,800 feet of elevated trails. Visitors are invited to explore the wetlands as well as wooded areas. Trails are handicapped accessible.
				Six ball diamonds are available, accommodating softball and baseball. Regional and national level tournaments are played at Panther Creek Park nearly every weekend during the summer, Local leagues play and practice at the park throughout the week.",
				'img' => '/img/parks/panthercreek.jpg',
				'sign_img' => '/img/signs/panthercreek_sign.jpg',
				'location' => 'lat: 37.715744, lng: -87.217542'
			]);

			DB::table('parks')->insert([
				'name' => 'Shifley',
				'address' => '2731 Bittel Road, Owensboro, KY 42301',
				'zip_code' => '42301',
				'description' => 'Shifley Park is a 10.3 acre neighborhood park. It was acquired in 1973. The football and baseball fields are currently leased to the Owensboro Board of Education.',
				'img' => '/img/parks/shifley.jpg',
				'sign_img' => '/img/signs/shifley_sign.jpg',
				'location' => 'lat: 37.751303, lng: -87.149729'
			]);

			DB::table('parks')->insert([
				'name' => 'Smothers',
				'address' => '199 West Veterans Blvd, Owensboro, KY 42301',
				'zip_code' => '42301',
				'description' => 'Located on the beautiful Ohio River, the park features 3 signature fountains with a show every 15 minutes and a cascading waterfall. Also feartures "Lazy Dayz Playground" which is a giant playground and spray park for kids.',
				'img' => '/img/parks/smothers.jpg',
				'sign_img' => '/img/signs/smothers_sign.jpg',
				'location' => 'lat: 37.776098, lng: -87.111985'
			]);

			DB::table('parks')->insert([
				'name' => 'Southern',
				'address' => '2801 South Griffith Avenue, Owensboro, KY 42301',
				'zip_code' => '42301',
				'description' => 'Southern Park has 3 baseball diamonds and is home to <a href="http://www.southernlittleleague.org/">Owensboro Southern Little League</a>.',
				'img' => '/img/parks/southern.jpg',
				'sign_img' => '/img/signs/southern_sign.jpg',
				'location' => 'lat: 37.743323, lng: -87.124169'
			]);

			DB::table('parks')->insert([
				'name' => 'Thompson-Berry',
				'address' => 'Thompson-Berry Park, Owensboro, KY 42301',
				'zip_code' => '42301',
				'description' => 'Thompson-Berry Park is a 38.5 acre community park located on Raven Drive off US 60 West. It was acquired in 1973. The main entrance is located at 1 Carter Road. Thompson-Berry Soccer Complex has 11 fields and a concession/restroom building. The complex is home to the <a href="http://owensborounited.com/">Owensboro United Soccer Club and Academy</a>.',
				'img' => '/img/parks/thompsonberry.jpg',
				'sign_img' => '/img/signs/thompsonberry_sign.jpg',
				'location' => 'lat: 37.777342, lng: -87.147882'
			]);

			DB::table('parks')->insert([
				'name' => 'Waymond Morris',
				'address' => '5200 Todd Bridge Road, Owensboro, KY 42301',
				'zip_code' => '42301',
				'description' => 'Waymond Morris Park is a 52 acre park. The first phase is complete and includes a 7 acrea lake, a 1 1/2 mile walking trail, a four field football (lighted) complex, a centralized concession and restoom building, and a 290-car parking lot. The football complex is home to the Owensboro-Daviess County Youth Football League.',
				'img' => '/img/parks/waymondmorris.jpg',
				'sign_img' => '/img/signs/waymondmorris_sign.jpg',
				'location' => 'lat: 37.717515, lng: -87.148865'
			]);

			DB::table('parks')->insert([
				'name' => 'Yellow Creek',
				'address' => '5710 Highway 144, Owensboro, KY 42303',
				'zip_code' => '42303',
				'description' => "Yellow Creek Park provides a multifaceted recreational and leisure opportunity.  Nestled along the wooded banks of Yellow Creek at Thruston, the 152 acre park features a Pioneer Village, and several outdoor pavilions.  Other amenities that set Yellow Creek Park apart from other area parks include a swinging bridge, a refurbished one room school house, a 7 acre lake, and multiple walking trails.
				Yellow Creek Park is a frequent backdrop for both professional and amateur photographers.  Family portraits and senior pictures are often taken near one of the two reconstructed covered bridges, the iron bridge and the James Lambert Pioneer Village.  The Pioneer Village boasts two log cabins and two log barns that are the perfect setting for photos, weddings and family gatherings.
				Sports enthusiast can also enjoy the multitude of recreational opportunities the park has to offer.  Yellow Creek Park has a basketball court, 2 tennis courts, 4 volleyball courts, and 3 softball/baseball diamonds.  The park is also home to and 18 hole disc golf course which has hosted several tournaments since its founding.
				Once a year the park is host to the annual River of Music Party (ROMP).  Bluegrass enthusiasts descend on Yellow Creek Park to enjoy the wonderful mix of music and nature.",
				'img' => '/img/parks/yellowcreek.jpg',
				'sign_img' => '/img/signs/yellowcreek_sign.jpg',
				'location' => 'lat: 37.800148, lng: -87.026558'
			]);

			DB::table('parks')->insert([
				'name' => 'Yewell Heritage',
				'address' => 'Haywood Courtt, Owensboro, KY 42303',
				'zip_code' => '42303',
				'description' => 'A 44 acre park established in 1995 located in Brookhill subdivision.',
				'img' => '/img/parks/yewellsheritage.jpg',
				'sign_img' => '/img/signs/yewellsheritage_sign.jpg',
				'location' => 'lat: 37.746333, lng: -87.069815'
			]);

			DB::table('parks')->insert([
				'name' => 'York',
				'address' => '2201 York Drive, Owensboro, KY 42301',
				'zip_code' => '42301',
				'description' => 'York Park is a 5 acre neighborhood park located on the north side of York Drive. It was acquired in 1949.',
				'img' => '/img/parks/york.jpg',
				'sign_img' => '/img/signs/york_sign.jpg',
				'location' => 'lat: 37.754946, lng: -87.140618'
			]);
    }
}
