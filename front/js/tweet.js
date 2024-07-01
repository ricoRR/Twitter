$(document).ready(async function() {
  let session;
  await $.get("/front/session.php", function(data) {
    session = JSON.parse(data);
  })

  let tweets;
  await $.get("/front/controllerTweet.php", function(data) {
    tweets = JSON.parse(data);
  })
  console.log(tweets);


  function afficherTweet(tweetContent, tweetUser) {
      let tweetDiv = document.createElement("div");
      tweetDiv.classList.add("p-2.5", "mt-2", "rounded-md", "px-4", "duration-300", "bg-gray-700");

      let tweetUserText = document.createElement("p");
      tweetUserText.classList.add("mt-2", "text-sm", "md:text-base", "text-gray-400");
      tweetUserText.textContent = "POSTED BY : " + tweetUser;

      let tweetContentText = document.createElement("p");
      tweetContentText.classList.add("mt-2", "text-sm", "md:text-base", "text-white");
      tweetContentText.textContent = tweetContent; 

      tweetDiv.appendChild(tweetUserText);
      tweetDiv.appendChild(tweetContentText);

      let messageDiv = document.getElementById("message");
      messageDiv.insertBefore(tweetDiv, messageDiv.firstChild);
  }

  // let storedTweets = JSON.parse(localStorage.getItem("tweets"));
  // if (storedTweets) {
      tweets.forEach(function(tweet) {
          afficherTweet(tweet.content, session['username']);
      // });
  })

  $('#idform').submit(function(e) {
      e.preventDefault(); 

      let tweetContent = $('#tweetContent').val();
      let tweetUser = $('#tweetUser').val(); 

      let newTweet = { content: tweetContent, user: tweetUser };
      let tweets = JSON.parse(localStorage.getItem("tweets")) || [];
      tweets.unshift(newTweet);
      localStorage.setItem("tweets", JSON.stringify(tweets));

      $.ajax({
          type: 'POST',
          url: 'connex_ddb.php',
          data: { tweetContent: tweetContent, tweetUser: session['id'] },
          success: function(response) {
              console.log(response);
          },
          error: function(xhr) {
              console.error(xhr);
          }
      });

      afficherTweet(tweetContent, tweetUser); 

      $('#tweetContent').val('');
  });
});
