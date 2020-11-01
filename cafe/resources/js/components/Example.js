import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Link, BrowserRouter as Router, Route } from 'react-router-dom';

  
  const AboutPage = () => {
    return (
      <h3>About Page</h3>
    );
  };    
const Example = () => {
  return (
    <section className="App">
      <Router>        
       <Link to="/about">About</Link>             
       <Route path="/about" component={AboutPage} />      
      </Router>    
    </section>
  );
};
export default Example;

// We only want to try to render our component on pages that have a div with an ID
// of "example"; otherwise, we will see an error in our console
if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}