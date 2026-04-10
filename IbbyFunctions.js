const crimeData = [ //array
  [
    "Second Safest Major City in England",
    "85 crimes per 1,000 people.",
    "still as a major city, crime rates are higher than the national average",
    "there are areas of the city that are less safe than others",
    "55% less knife crime  In Sheffield than London"
  ],
  [
    "Try not to walk alone – wherever possible walk with a friend, colleague or someone you know",
    "Choose appropriate footwear – wear sensible shoes (such as trainers or anything flat) that will allow for you to make a quick getaway",
    "Be alert to your surroundings – concentrate on where you’re going and what’s happening around you. Don’t be distracted by your phone or have headphones in both ears so that you can’t hear potential danger signs.",
    "Walk with confidence and purpose – keep your head up and walk with a steady pace. Travel as if you know where you’re going even if you don’t. Also, don’t be afraid to make eye contact with people you pass.",
    "Stick to public areas – avoid cutting through parks, fields, alleyways, woods or other shortcuts. Shaving off time from your journey isn’t worth the risk.",
    "Walk in the direction of oncoming traffic – you’ll be able to see any accidents happening up ahead and it will prevent vehicles from pulling up behind you.",
    "Don’t go home if you think you’re being followed – instead, go somewhere public where you can alert security or to a friend or family members’ house."
  ],
  [
    "Areas With The Most Crime Are S1, S2, S4",
    "City centre has higher crime rates",
    "These are areas with social deprivation",
    "Avoid These Areas At Night",
    "these are mixed areas, from quiet streets to busy urban areas",
    "S1 Most Common Crimes: Violence & Sexual Offences, Anti-Social Behaviour (ASB), Shoplifting.",
    "S1 Most Dangerous Areas: West Street, Carver Street, The Moor, Arundel Gate, Fitzalan Square",
    "S2 Most Common Crimes:violent crime, anti-social behaviour, and shoplifting",
    "S2 Most Dangerous Areas: Wybourn, Manor, Arbourthorne, Highfield, Manor Top",
    "S4 Most Common Crimes:violent crime and sexual offences, often followed closely by anti-social behaviour and shoplifting",
    "S4 Most Dangerous Areas: Smilter Lane, Norwood Grange Drive, Skinnerthorpe Road, Page Hall Road, Upwell Lane, Burngreave, Pitsmoor"
  ],
  [
    "Safest areas: S6, S10, S11",
    "These are quiet suburban areas",
    "Most Common Crimes: Anti-Social Behaviour (ASB), Vehicle Crime, Burglary",
    "particuarly near shops and parks",
  ]
];

const foodData = [//array
  [
    "With 3 Kitchens,8 Cafes And Plenty Of Resturants Nearby, There's Something For Everyone In Sheffield Hallam University",
    "Includding Halal, Vegan, Vegetarian, Gluten Free And Dairy Free Options",
    "With Meal Deals Starting At £3.50, A Classic Sandwich, Drink, And Snack Deal",
  ],
  [
    "Vegan And Vegetarian And Vegan Options",
    "Vegeterian And Vegan Sandwiches",
    "vegetarian/vegan pizzas",
    "vegan cakes And Cookies and milk alternatives For Hot Drinks",
    "Vegan Curry",
    "",
    "Nearby Resturants- South Street Kitchen, The Chakra Lounge, Church - Temple of Fun ",
  ],
  [
    "Halal Options",
    "halal Chicken Available",
    "Afro-Caribbean dishes from Zawadi Café available at the City Campus",
    "jollof rice, rice & peas, jerk chicken, and curried goat",
    "",
    "Nearby Resturants- Dave's Hot Chicken, Jimmy's Kitchen, Popeyes, Kurdistan Grill ",
  ],
  [
    "Gluten Free ",
    "Gluten Free Meal Deals- Sandwich, Drink, And Snack",
    "Salads",
    "Please Inform Kitchen Staff Of Any Dietary Requirements",
    "",
    "Nearby Resturants- South Street Kitchen, Cosy Club, Pho Sheffield ",
  ],
  [
    "Nearby Resturants That Cater To Allergies",
    "Wagamama",
    "Mowgli Street Food",
    "Please Inform Kitchen Staff Of Any Dietary Requirements",
    "Ego Mediterranean Restaurant & Bar",
  ]
];

const foodData2 = [//array
  [
    "with 11 cafes, resturants and bars across campus there's something for everyone in Sheffield University",
    "Univeristy Bar Offers 20percent student discount, perfect for sport fans and socialising",
    "Including Halal, Vegan, Vegetarian, Gluten-Free, and Dairy-Free Options",
    "Meal Deals Starting at £3.50, Sandwich King sandwich/wrap/sub/salad",
    " a snack (crisps/popcorn/yoghurt), and a drink.",
  ],
  [
    "Vegan and Vegetarian Options",
    "All of our venues serve vegan and vegetarian options, including in our meal deal and at Grill & Go",
    " you are unsure of anything, or don't see what you're looking for please ask a member of staff who will be more than willing to help!",
    "",
    "Nearby Restaurants- South Street Kitchen, The Pink Tree, The Chakra Lounge",
  ],
  [
    "Halal Options",
    "We offer Halal options at a number of our outlets, including our famous Grill & Go at the SU and the Diamond Kitchen",
    "and our meal deal includes a range of Halal sandwiches.",
    "Our team will be happy to help if you have any questions or concerns.",
    "",
    "Nearby Restaurants- Nue Café & Deli Gluten Free , German Doner Kebab, Engin's Bar & Grill ",
  ],
  [
    "Gluten-Free Options and Allergy Requirements",
    " gluten free options in our meal deal, breads for sandwiches and wraps at Grill & Go",
    "We also serve soya milk and oat milk as dairy free alternatives for hot drinks at no extra cost",
    "PIf you are unsure or have any specific requirements please speak to a member of our team and they will do their best to cater to your needs. ",
    "",
    "Nearby Restaurants- The Gluten-Free Hub, Taste of Thailand , Wagamama ",
  ],
];


function cycleList(Info, CurrentInfo, HtmlList) { //create a function, CycleList, Info- array, CurrentInfo- index, HtmlList- id of ul list in html
  const ul = document.getElementById(HtmlList); // Get the id of the ul of the current html page, will store in ul

  ul.innerHTML = "";// before loop starts, we already have content in ul list, clear it so the new items replace the old ones

  CurrentInfo.value = (CurrentInfo.value + 1) % Info.length;//increment, modulo used to loop back to start of array when we reach the end so cycling is endless

  for (const item of Info[CurrentInfo.value]) {// Loop through the current sub-array of data, 'item' is each element of the array
    const li = document.createElement("li");//turns each item in the sub-array into a list item so it can fill the ul list in html page
    li.textContent = item;// Set the text content of the list item to the current item during each loop iteration
    ul.append(li);//append li item from array onto the ul list in html
  }
}




let crimeIndex = { value: -1 };  // start at -1 of  crimeData array , use crimeIndex to keep track of which sub-array of crimeData we are currently displaying, when cycleList is called, it will increment crimeIndex
function CycleCrimeInfo() { //function CycleCrimeInfo is CycleList Function but with specific parameters
  cycleList(crimeData, crimeIndex, "CrimeInfoList");
}

let foodIndex = { value: -1 };
function CycleFoodInfo() {
  cycleList(foodData, foodIndex, "FoodInfoList");
}

let foodIndex2 = { value: -1 };
function cycleFoodInfo2() {
  cycleList(foodData2, foodIndex2, "FoodInfoList2");
}


window.addEventListener("DOMContentLoaded", () => {//once  content loaded, run following code
  if (document.getElementById("CrimeInfoList")) {//if the current page has an element with the id "CrimeInfoList", run the following code
    CycleCrimeInfo();//again, this is cycle info function with specific parameters
  }

  if (document.getElementById("FoodInfoList")) {
    CycleFoodInfo();
  }

  if (document.getElementById("FoodInfoList2")) {
    cycleFoodInfo2();
  }
});