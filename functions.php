<?php 

function titlecase($word) {
  $word = ucwords($word);
  return $word;
}

function capfirst($word) {
  $word = ucfirst($word);
  return $word;
}

function zodiac($type) {
  if ($type == 'aquarius') {
    $valid = true;
    $description = 'The mad scientist and humanitarian of the horoscope wheel, futuristic Aquarius energy helps us innovate and unite for social justice.';
  } 

    else if ($type == 'pisces') {
    $valid = true;
    $description = 'The dreamer and healer of the horoscope family, Pisces energy awakens compassion, imagination and artistry, uniting us as one.';
  } 

    else if ($type == 'aries') {
    $valid = true;
    $description = 'The pioneer and trailblazer of the horoscope wheel, Aries energy helps us initiate, fight for our beliefs and fearlessly put ourselves out there.';
  } 

    else if ($type == 'taurus') {
    $valid = true;
    $description = 'The persistent provider of the horoscope family, Taurus energy helps us seek security, enjoy earthly pleasures and get the job done.';
  } 

    else if ($type == 'gemini') {
    $valid = true;
    $description = 'The most versatile and vibrant horoscope sign, Gemini energy helps us communicate, collaborate and fly our freak flags at full mast.';
  } 

    else if ($type == 'cancer') {
    $valid = true;
    $description = 'The natural nurturer of the horoscope wheel, Cancer energy helps us connect with our feelings, plant deep roots and feather our family nests.';
  } 

    else if ($type == 'leo') {
    $valid = true;
    $description = 'The drama queen and regal ruler of the horoscope clan, Leo energy helps us shine, express ourselves boldly and wear our hearts on our sleeves.';
  } 

    else if ($type == 'virgo') {
    $valid = true;
    $description = 'The masterful helper of the horoscope wheel, Virgo energy teaches us to serve, do impeccable work and prioritize wellbeing—of ourselves, our loved ones and the planet.';
  } 

    else if ($type == 'libra') {
    $valid = true;
    $description = 'The balanced beautifier of the horoscope family, Libra energy inspires us to seek peace, harmony and cooperation—and to do it with style and grace.';
  } 

    else if ($type == 'scorpio') {
    $valid = true;
    $description = 'The most intense and focused of the horoscope signs, Scorpio energy helps us dive deep, merge our superpowers and form bonds that are built to last.';
  } 

    else if ($type == 'sagittarius') {
    $valid = true;
    $description = 'The worldly adventurer of the horoscope wheel, Sagittarius energy inspires us to dream big, chase the impossible and take fearless risks.';
  } 

    else if ($type == 'capricorn') {
    $valid = true;
    $description = 'The measured master planner of the horoscope family, Capricorn energy teaches us the power of structure and long-term goals.';
  } 

    else {
    $valid = false;
  };

  if ($valid == true) {
    return('
      <div class="card my-4 mx-auto" style="width: 20rem;">
        <img class="img-fluid" src="images/'.$type.'.png" alt="Card image cap">
        <div class="card-block">
          <h2 class="h4 card-title">'.titlecase($type).'</h2>
          <p class="card-text">'.$description.'</p>
        </div>
      </div>
    ');
  } else {
    return('
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="m-0"><strong>'.capfirst($type).'? Congratulations!</strong> You are now lost in space. Try again.</p>
      </div>
    ');
  }
}
