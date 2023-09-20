Felicia Ferren - 2440013071

## Sbucks WebApp Remake

This time, I am remaking a simple Sbucks Webapp. Inside the WebApp, there will be 3 pages:
1. **Homepage / Profile Page** -> displaying user collected points, and today's promo tab.
2. **Transaction History Page** -> displaying the transaction history of the user.
3. **Coffee List Page** -> displaying coffee list divided by several categories, namely 'espresso', 'blended', 'brewed', and 'others'. User can filter the view and order coffee (one coffee per transaction). 

It is a mobile friendly app! Hence, the view I will provide to you is in a mobile screen view:


### Database
The webapp is connected to a relational database, where there are 3 tables inside the database. Tables are:
1. **User**: detail user of Sbucks Web App.
2. **Coffee**: detail of the coffee drinks, sold by Sbucks Web App.
3. **Transaction**: detail of the transactions history of Sbucks Web App.

## Relationships
**One to many**: 
- **Each user** has **many transactions**, while **each transcaction** is only owned by **a user**.
- **Each coffee** has **many transactions**, while **each transcaction** is only owned by **a coffee**.


## Views
Here are the views for Sbucks WebApp Remake: 

### User 1
Mr. Vico Lomar. A user with 3 coffee purchases in history on 19 March 2023, 20 March 2023 and 21 March 2023. Mr. Vico Lomar is a user with loyalty in the Gold Level category.

1. homepage view + pop-up when trying to redeem points
<img src="https://github.com/ferren11/Sbucks-WebApp-Remake/blob/master/public/webpage-view/user1%20hp1.png" width="100">
<img src="https://github.com/ferren11/Sbucks-WebApp-Remake/blob/master/public/webpage-view/user1%20hp2.png" width="100">
<img src="https://github.com/ferren11/Sbucks-WebApp-Remake/blob/master/public/webpage-view/user1%20hp3.png" width="100">

2. transaction history page view
<img src="https://github.com/ferren11/Sbucks-WebApp-Remake/blob/master/public/webpage-view/user1%20tr1.png" width="100">

3. coffee list page view, divided into categories: all, espresso, blended, brewed, others. – the categories can be scrolled horizontally
<img src="https://github.com/ferren11/Sbucks-WebApp-Remake/blob/master/public/webpage-view/user1%20cf1.png" width="100">
<img src="https://github.com/ferren11/Sbucks-WebApp-Remake/blob/master/public/webpage-view/user1%20cf2.png" width="100">
<img src="https://github.com/ferren11/Sbucks-WebApp-Remake/blob/master/public/webpage-view/user1%20cf3.png" width="100">

4. when ordering, there will be pop-up about order confirmation. Click buy, then will give you a message that the order has been placed
<img src="https://github.com/ferren11/Sbucks-WebApp-Remake/blob/master/public/webpage-view/user1%20cf4.png" width="100">
<img src="https://github.com/ferren11/Sbucks-WebApp-Remake/blob/master/public/webpage-view/user1%20cf5.png" width="100">

5. back to the transaction history page, showing the newest transaction is succeed
<img src="https://github.com/ferren11/Sbucks-WebApp-Remake/blob/master/public/webpage-view/user1%20tr2%20(last).png" width="100">

### User 2
Ms. Fei Fei Li. A user with 3 coffee purchases in history on 18 March 2023, 19 March 2023 and 21 March 2023. Ms. Fei Fei Li is a user with Green Level Loyalty Category

1. homepage view + pop-up when trying to redeem points
<img src="https://github.com/ferren11/Sbucks-WebApp-Remake/blob/master/public/webpage-view/user2%20hp1.png" width="100">
<img src="https://github.com/ferren11/Sbucks-WebApp-Remake/blob/master/public/webpage-view/user2%20hp2.png" width="100">
<img src="https://github.com/ferren11/Sbucks-WebApp-Remake/blob/master/public/webpage-view/user2%20hp3.png" width="100">

2. transaction history page view
<img src="https://github.com/ferren11/Sbucks-WebApp-Remake/blob/master/public/webpage-view/user2%20tr1.png" width="100">

3. coffee list page view, divided into categories: all, espresso, blended, brewed, others. – the categories can be scrolled horizontally
<img src="https://github.com/ferren11/Sbucks-WebApp-Remake/blob/master/public/webpage-view/user2%20cf1.png" width="100">
<img src="https://github.com/ferren11/Sbucks-WebApp-Remake/blob/master/public/webpage-view/user2%20cf2.png" width="100">
<img src="https://github.com/ferren11/Sbucks-WebApp-Remake/blob/master/public/webpage-view/user2%20cf3.png" width="100">

4. when ordering, there will be pop-up about order confirmation. Click buy, then will give you a message that the order has been placed
<img src="https://github.com/ferren11/Sbucks-WebApp-Remake/blob/master/public/webpage-view/user2%20cf4.png" width="100">
<img src="https://github.com/ferren11/Sbucks-WebApp-Remake/blob/master/public/webpage-view/user2%20cf5.png" width="100">

5. back to the transaction history page, showing the newest transaction is succeed
<img src="https://github.com/ferren11/Sbucks-WebApp-Remake/blob/master/public/webpage-view/user2%20tr2%20(last).png" width="100">

6. when we choose no // don’t want to order, the pop-up will removed. Then, when we go to the transaction history page, there is no transaction made
<img src="https://github.com/ferren11/Sbucks-WebApp-Remake/blob/master/public/webpage-view/user2%20cf6.png" width="100">
<img src="https://github.com/ferren11/Sbucks-WebApp-Remake/blob/master/public/webpage-view/user2%20tr3.png" width="100">
