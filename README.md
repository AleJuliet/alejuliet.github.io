# DressMe Testing Content based algorithm

This is part of the project developed for the course Advance Project from the Technical University of Denmark (DTU). 

This project contains different scripts that implement a simple version of a Content based recommendation algorithm, to recomend diferent outfits to users. The idea is that outfits will be displayed based on users selection (therefore, it "learns" from it). The results are exported in a Json file, which is then later used to compare them against random recommendations.

This was implemented on Nov 2018.

The code was implemented in Javascript.

- index_nor_v2.html: contains the content based recommendation algorithm
- index.html: contains a random recommendation algorithm


## Recommendation system algorithm
For the implementation of the content based algorithm and testing purposes, only three clothing attributes were selected (color, pattern and occasion), from the six attributes displayed in the tag, screen of the DressMe mobile app.
- Method1() - Similarity: this method finds the outfit most similar to the previous liked outfit, using cosine similarity (function name: 'calculatesimilaritie()').
- Method2() - Good List: this method choose the outfit from the list of previous likes (named good list) based on probability (function name: 'recommendbasedonprob()'). The probability is generated base on the frequency this outfit has been liked.
- Method3() - Feature Score: this method choose the outfit based on feature score (function name: 'recommendbasedonnew()'). First, it selects a random item from the database and using the feature score matrix selects the corresponding item that matches the highest number of attributes (color, occasion, pattern). This method was created with the intension of being used when adding new items. The selected frequency for executing each method was chose based on random mix of trials.

