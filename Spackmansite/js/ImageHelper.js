function getHomepageViewModel() {
    
    return {"homepage" : {
                "images" : [
                    {"url" : "img/Collage1.jpg", "alt" : "image1", "title" : "collage1"},
                    {"url" : "img/Collage2.jpg", "alt" : "image2", "title" : "collage2"},
                    {"url" : "img/Collage3.jpg", "alt" : "image3", "title" : "collage3"},
                    {"url" : "img/Collage4.jpg", "alt" : "image4", "title" : "collage4"},
                    {"url" : "img/Collage5.jpg", "alt" : "image5", "title" : "collage5"},
                    {"url" : "img/Collage6.jpg", "alt" : "image6", "title" : "collage6"}
                ]}
           };
}

function getMenuViewModel(){
	    
    return {"menu" : {
                "about" : [{'title' : 'test1', 'link' : 'http://google.com'},{'title' : 'test2', 'link' : 'http://google.com'},{'title' : 'test4', 'link' : 'http://google.com'},{'title' : 'test3', 'link' : 'http://google.com'}], 
				'contact' : [{'title' : 'test5', 'link' : 'http://google.com'},{'title' : 'test6', 'link' : 'http://google.com'},{'title' : 'test7', 'link' : 'http://google.com'},{'title' : 'test8', 'link' : 'http://google.com'}], 
				'Gallery' : [{'title' : 'test12', 'link' : 'http://google.com'},{'title' : 'test11', 'link' : 'http://google.com'},{'title' : 'test10', 'link' : 'http://google.com'},{'title' : 'test9', 'link' : 'http://google.com'}], 
				'legal' : []},
				'visiblelist' : ko.observableArray([])};
 }
