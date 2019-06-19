import React from "react";
import Header from "./components/header/Header";
import MainSection from "./components/main_section/MainSection";
import Footer from "./components/footer/Footer";

function App() {
  return (
    <div className="container-fluid">
      <Header />
      <MainSection />
      <Footer />
    </div>
  );
}

export default App;
