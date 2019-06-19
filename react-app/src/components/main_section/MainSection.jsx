import React, { Component } from "react";

import Item from "./item/Item";

export default class MainSection extends Component {
  render() {
    return (
      <div className="container-fluid main-section">
        <div className="items-wrapper">
          <Item />
          <Item />
          <Item />
          <Item />
          <Item />
          <Item />
        </div>
      </div>
    );
  }
}
