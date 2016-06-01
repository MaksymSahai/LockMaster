var size = 110,
						newsContent= $('#first-review'),
						newsText = newsContent.text();
						
					if(newsText.length > size){
						newsContent.text(newsText.slice(0, size) + ' ...');
					}
var size = 110,
						newsContent= $('#second-review'),
						newsText = newsContent.text();
						
					if(newsText.length > size){
						newsContent.text(newsText.slice(0, size) + ' ...');
					}