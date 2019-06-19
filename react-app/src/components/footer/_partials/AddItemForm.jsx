import React, { Component } from "react";

export default class AddItemForm extends Component {
  render() {
    return (
      <div className="form-modal">
        <form>
          <div className="form-group">
            <label htmlFor="exampleInputEmail1">Title</label>
            <input
              type="text"
              className="form-control"
              id="title"
              aria-describedby="title"
              placeholder="Title"
            />
          </div>
          <div className="form-group">
            <label htmlFor="content">Content</label>
            <input
              type="text"
              className="form-control"
              id="content"
              aria-describedby="content"
              placeholder="Content"
            />
          </div>
          <div className="form-group">
            <label htmlFor="exampleInputPassword1">Image</label>
            <input
              name="image"
              type="file"
              className="form-control"
              id="image"
              placeholder="Password"
            />
          </div>
          <div className="form-group">
            <label htmlFor="tag">Tag</label>
            <input
              type="text"
              className="form-control"
              id="tag"
              placeholder="Tag"
            />
          </div>
          <button type="submit" className="btn btn-primary">
            Submit
          </button>
        </form>
      </div>
    );
  }
}
