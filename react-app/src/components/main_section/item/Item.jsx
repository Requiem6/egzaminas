import React, { Component } from "react";

export default class Item extends Component {
  render() {
    return (
      <div className="card-wrapper">
        <div className="card">
          <img src="..." className="card-img-top" alt="..." />
          <div className="card-body">
            <h5 className="card-title">Card title</h5>
            <p className="card-text">
              Some quick example text to build on the card title and make up the
              bulk of the card's content.
            </p>
            <i className="fas fa-heart" />
          </div>
        </div>
      </div>
    );
  }
}
