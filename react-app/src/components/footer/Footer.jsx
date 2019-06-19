import React, { Component } from "react";

import AddItemForm from "./_partials/AddItemForm";

export default class Footer extends Component {
  render() {
    return (
      <nav className="navbar fixed-bottom">
        <button
          className="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarToggleExternalContent"
          aria-controls="navbarToggleExternalContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span className="navbar-toggler-icon" />
        </button>
        <button className="btn btn-danger btn-add">Pridėti</button>
      </nav>
    );
  }
}
